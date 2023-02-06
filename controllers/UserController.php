<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\models\User;
use DateTime;

class UserController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['index', 'createView', 'create', 'edit', 'editView', 'destroy']));
    }

    public function index()
    {
        $q =  isset($_GET['q']) ? $_GET['q'] : null;

        $filter = [];

        if ($q) {
            $filter["lastname"] = "%$q%";
        }


        $data = User::whereLike($filter)->orderBy("created_at DESC")->get();

        $this->setLayout('admin');
        return $this->render('admin/user/index', [
            "q" => $q,
            "data" => $data,
            "title" => "User",
            "breadcrumbs" => [
                [
                    "link" => "/admin/user",
                    "label" => "User"
                ],
                [
                    "link" => "#",
                    "label" => "index"
                ],
            ]
        ]);
    }


    public function createView()
    {
        $this->setLayout('admin');
        return $this->render(
            'admin/user/create',

            [
                "title" => "User",
                "breadcrumbs" => [
                    [
                        "link" => "/admin/user",
                        "label" => "User"
                    ],
                    [
                        "link" => "#",
                        "label" => "create"
                    ],
                ]
            ]
        );
    }

    public function forgotPasswordView()
    {
        $this->setLayout(false);
        return $this->render(
            'admin/user/forgot-password'
        );
    }

    public function forgotPassword(Request $request)
    {
        $loginId = $_POST['login_id'];
        if (!$loginId) {
            Application::$app->session->setFlash('errors', [
                ["message" => "Hãy nhập login id"]
            ]);
            return Application::$app->response->redirect('/forgot-password');
        } else {

            if (strlen($loginId) < 4) {
                Application::$app->session->setFlash('errors', [
                    ["message" => "Hãy nhập login id  tối thiểu 4 kí tự"]
                ]);
                return Application::$app->response->redirect('/forgot-password');
            }

            $data = User::findOne(["login_id" => $loginId]);
            if ($data) {
                $reset_password_token = (string) microtime(true);
                $update = Application::$app->db->execute("update users 
                set reset_password_token = :reset_password_token
                where id = 
                :id
                ", ["reset_password_token" => $reset_password_token, "id" => $data->id]);

                if ($update) {
                    Application::$app->session->setFlash('msg', 'Gửi yêu cầu thành công');
                    Application::$app->response->redirect('/forgot-password');
                } else {
                    Application::$app->session->setFlash('errors', $data->errors);
                    Application::$app->response->redirect("/forgot-password");
                }
            } else {
                Application::$app->session->setFlash('errors', [
                    ["message" => "Login id không tồn tại trong hệ thống"]
                ]);
                Application::$app->response->redirect("/forgot-password");
            }
        }
    }




    public function resetPasswordView()
    {
        $q =  isset($_GET['q']) ? $_GET['q'] : null;

        $filter = [];

        if ($q) {
            $filter["lastname"] = "%$q%";
        }

        $data = User::where([
            "reset_password_token" => "0"
        ], true)->whereLike($filter)->orderBy("created_at DESC")->get();

        $this->setLayout('admin');
        return $this->render('admin/user/reset-password', [
            "q" => $q,
            "data" => $data,
            "title" => "Đặt lại mật khẩu",
            "breadcrumbs" => [
                [
                    "link" => "/admin/user/reset-password",
                    "label" => "Reset password"
                ],
                [
                    "link" => "#",
                    "label" => "index"
                ],
            ]
        ]);
    }

    public function resetPassword()
    {
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if (!$id) {
            Application::$app->session->setFlash('errors', [
                ["message" => "Hãy lựa chọn tài khoản"]
            ]);
            return Application::$app->response->redirect('/admin/user/reset-password');
        } else {


            if (!$password) {
                Application::$app->session->setFlash('errors', [
                    ["message" => "Hãy nhập mật khẩu mới"]
                ]);
                return Application::$app->response->redirect('/admin/user/reset-password');
            }

            if (strlen($password) < 6) {
                Application::$app->session->setFlash('errors', [
                    ["message" => "Hãy nhập mật khẩu tối thiểu 6 kí tự"]
                ]);
                return Application::$app->response->redirect('/admin/user/reset-password');
            }


            $user = User::findOne(["id" => $id]);
            if ($user) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $update = Application::$app->db->execute("update users 
                set reset_password_token = :reset_password_token,
                password = :password
                where id = 
                :id
                ", ["reset_password_token" => "0", "password" => $password, "id" => $id]);

                if ($update) {
                    Application::$app->session->setFlash('msg', 'Reset mật khẩu thành công');
                    Application::$app->response->redirect('/admin/user/reset-password');
                } else {
                    Application::$app->session->setFlash('errors', $update->errors);
                    Application::$app->response->redirect("/admin/user/reset-password");
                }
            } else {
                Application::$app->session->setFlash('errors', [
                    ["message" => "Tài khoản không tồn tại"]
                ]);
                return Application::$app->response->redirect('/admin/user/reset-password');
            }
        }
    }



    public function create(Request $request)
    {
        $classModel = new User();
        $data = $request->getBody();
        
        $user = User::get();
        foreach ($user as $value){
            if($data['login_id'] == $value->login_id){
                Application::$app->session->setFlash('msg', 'Tên đăng nhập đã có');
                return Application::$app->response->redirect('/admin/user/create');;
            }
        }
        $classModel->loadData($data);
        $now = new DateTime();
        $classModel->updated_at = $now->format('Y-m-d H:i:s');
        if ($classModel->validate() && $classModel->save()) {
            Application::$app->session->setFlash('msg', 'Thêm mới bản ghi thành công');
            Application::$app->response->redirect('/admin/user/create');
        } else {
            Application::$app->session->setFlash('errors', $classModel->errors);
            Application::$app->response->redirect('/admin/user/create');
        }
    }

    public function editView()
    {
        $id = $_GET['id'];
        $data = User::findOne(["id" => $id]);

        $this->setLayout('admin');
        return $this->render(
            'admin/user/edit',
            [
                "data" => $data,
                "title" => "User",
                "breadcrumbs" => [
                    [
                        "link" => "/admin/user",
                        "label" => "User"
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
        $id = $_GET['id'];
        $classModel = new User();
        $user_id = User::findOne(["id" => $id]);
        $data = $request->getBody();
        $classModel->loadData($data);
        $classModel->password = password_hash($data['password'], PASSWORD_DEFAULT);
        $update = Application::$app->db->execute("UPDATE `users` SET `id`='$id',`email`='$classModel->email',`firstname`='$classModel->firstname',`lastname`='$classModel->lastname',`avatar`='$classModel->avatar',`phone`='$classModel->phone',`diachi`='$classModel->diachi',`namsinh`='$classModel->namsinh',`status`='$classModel->status',`role`='$classModel->role',`password`='$classModel->password',`login_id`='$user_id->login_id',`reset_password_token`='0' where id = $id");
        $classModel->id = $id;
        $now = new DateTime();
        $classModel->updated_at = $now->format('Y-m-d H:i:s');
        if ($classModel->validate() && $update) {
            Application::$app->session->setFlash('msg', 'Cập nhật bản ghi thành công');
            Application::$app->response->redirect("/admin/user/edit?id=$id");
        } else {
            Application::$app->session->setFlash('errors', $classModel->errors);
            Application::$app->response->redirect("/admin/user/edit?id=$id");
        }
    }

    public function destroy()
    {
        $id = $_GET['id'];
        $cmd = User::destroy($id);
        if ($cmd) {
            Application::$app->session->setFlash('msg', 'Xóa bản ghi thành công');
            Application::$app->response->redirect('/admin/user');
        } else {
            Application::$app->session->setFlash('msg', 'Delete item error');
            Application::$app->response->redirect('/admin/user');
        }
    }
}
