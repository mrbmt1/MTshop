<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\models\User;
use DateTime;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['index']));

    }

    public function index()
    {
        $user = Application::$app->session->get('user_');

        $data = User::findOne(["id" => $user->id]);
        $this->setLayout('admin');
        return $this->render('admin/Information/index', [
            // "q" => $q,
            "data" => $data,
            "title" => "Information",
            "breadcrumbs" => [
                [
                    "link" => "/user",
                    "label" => "Information"
                ],
                [
                    "link" => "#",
                    "label" => "index"
                ],
            ]
        ]);
    }


    public function editView()
    {
        $user = Application::$app->session->get('user_');
        $post = User::findOne(["id" => $user->id]);
        $this->setLayout('admin');
        return $this->render(
            'admin/Information/edit',
            [
                "data" => $post,
                "title" => "Information",
                "breadcrumbs" => [
                    [
                        "link" => "/admin/Information",
                        "label" => "Information"
                    ],
                    [
                        "link" => "#",
                        "label" => "edit"
                    ],
                ]
            ]
        );
    }


    public function edit(Request $request)
    {
        $user = Application::$app->session->get('user_');
        $classModel = new User();
        $data=$request->getBody();
        $classModel->loadData($data);
        $classModel->login_id = $user->login_id;
        if($data['password'] != ""){
            $classModel->password = password_hash($data['password'], PASSWORD_DEFAULT);
        }else{
            $classModel->password = $user->password;
        }
        $update = Application::$app->db->execute("UPDATE `users` SET `id`='$user->id',`email`='$classModel->email',`firstname`='$classModel->firstname',`lastname`='$classModel->lastname',`avatar`='$classModel->avatar',`phone`='$classModel->phone',`diachi`='$classModel->diachi',`namsinh`='$classModel->namsinh',`status`='$classModel->status',`role`='$classModel->role',`password`='$classModel->password',`login_id`='$classModel->login_id',`reset_password_token`='0' where id = $user->id");
        $classModel->id = $user->id;
        $now = new DateTime();
        $classModel->updated_at = $now->format('Y-m-d H:i:s');
        if ($classModel->validate() && $update) {
            Application::$app->response->redirect('/admin/Information');
            Application::$app->session->set('confirmTemp', $classModel);
        } else {

            Application::$app->session->setFlash('errors', $classModel->errors);
            Application::$app->response->redirect("/admin/Information");
        }
    }
}
