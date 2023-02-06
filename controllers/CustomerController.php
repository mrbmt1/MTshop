<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\models\User;
use app\models\Order;
use DateTime;

class CustomerController extends Controller
{
    public function index()
    {
        $user = Application::$app->session->get('user_');

        $data = User::findOne(["id" => $user->id]);
        $this->setLayout('user');
        return $this->render('customer/Information/index', [
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
        $this->setLayout('user');
        return $this->render(
            'customer/Information/edit',
            [
                "data" => $post,
                "title" => "Information",
                "breadcrumbs" => [
                    [
                        "link" => "/user",
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
            Application::$app->response->redirect('/user');
            Application::$app->session->set('confirmTemp', $classModel);
        } else {

            Application::$app->session->setFlash('errors', $classModel->errors);
            Application::$app->response->redirect("/user");
        }
    }
    
    public function update(Request $request)
    {
        $id = (int)$_GET['id'] ?? 1;
        $status = (int)$_GET['status'] ?? 1;
        $classModel = new Order();
        $data = Order::findOne(['id' =>$id]);
        if($status == 0){
            $data->status =2;
        }
        $classModel->loadData($data);
        $now = new DateTime();
        $classModel->updated_at = $now->format('Y-m-d H:i:s');

        $id = $_GET['id'];
        if ($classModel->validate() && $classModel->update()) {
            Application::$app->response->redirect('/user/showDetail');
            Application::$app->session->set('confirmTemp', $classModel);
        } else {

            Application::$app->session->setFlash('errors', $classModel->errors);
            Application::$app->response->redirect("/admin/showDetail");
        }
    }
    public function showDetail()
    {
        $user = Application::$app->session->get('user_');
        $sql = "select order_details.*,order_details.id as idod, orders.datereal as time,orders.id as ido,
        orders.status as st, products.*,products.avatar as av, order_details.diachi as diachiOrder,
        users.*, orders.paymentType, orders.price FROM order_details
        join orders on order_details.order_id = orders.id 
        join products on order_details.product_id = products.id
        join users on orders.customer_id = users.id where orders.customer_id = $user->id ORDER BY orders.id DESC";
         
        $data = Application::$app->db->query($sql);
        
        $this->setLayout('user');
        return $this->render('customer/Order/index', [
            // "q" => $q,
            "data" => $data,
            "title" => "Order",
            "breadcrumbs" => [
                [
                    "link" => "/user",
                    "label" => "Order"
                ],
                [
                    "link" => "#",
                    "label" => "index"
                ],
            ]
        ]);
    }
}