<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\models\OrderDetails;
use app\models\Order;
use DateTime;

class OrderDetailsController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['index', 'createView', 'create', 'edit', 'editView', 'destroy']));
    }

    public function index()
    {
        Application::$app->session->remove('confirmTemp');
        
        $q =  isset($_GET['q']) ? $_GET['q'] : null;

        $filter = [];

        if ($q) {
            $filter["name"] = "%$q%";
        }
        // $data = OrderDetails::whereLike($filter)->orderBy("created_at DESC")->get();
    
        // $sql = "select order_details.*,order_details.id as idod, orders.datereal as time,orders.id as ido,orders.status as st, products.*, users.*, orders.paymentType, orders.price FROM order_details
        // join orders on order_details.order_id = orders.id 
        // join products on order_details.product_id = products.id
        // join users on orders.customer_id = users.id ORDER BY orders.id DESC";
        $sql = "select order_details.*,order_details.id as idod, orders.datereal as time,orders.id as ido,orders.status as st, products.*, users.*, order_details.diachi as diachiOrder, orders.paymentType, orders.price FROM order_details
        join orders on order_details.order_id = orders.id 
        join products on order_details.product_id = products.id
        join users on orders.customer_id = users.id ORDER BY orders.id DESC";
         
        $data = Application::$app->db->query($sql);
        $this->setLayout('admin');
        return $this->render('admin/orderdetails/index', [
            "q" => $q,
            "data" => $data,
            "title" => "Order Details",
            "breadcrumbs" => [
                [
                    "link" => "/admin/orderDetails",
                    "label" => "Order Details"
                ],
                [
                    "link" => "#",
                    "label" => "index"
                ],
            ]
        ]);
    }
    public function edit(Request $request)
    {
        $id = (int)$_GET['id'] ?? 1;
        $status = (int)$_GET['status'] ?? 1;
        $classModel = new Order();
        $data = Order::findOne(['id' =>$id]);
        if($status == 0){
            $data->status =1;
        }else if($status == 2){
            $data->status =3;
        } else if($status == 4){
            $data->status =1;
        }
        $classModel->loadData($data);
        $now = new DateTime();
        $classModel->updated_at = $now->format('Y-m-d H:i:s');

        $id = $_GET['id'];
        if ($classModel->validate() && $classModel->update()) {
            Application::$app->response->redirect('/admin/orderdetails');
            Application::$app->session->set('confirmTemp', $classModel);
        } else {

            Application::$app->session->setFlash('errors', $classModel->errors);
            Application::$app->response->redirect("/admin/orderdetails");
        }
    }

    public function destroy()
    {
        $id = $_GET['id'];
        $idod = $_GET['idod'];
        $cmd = OrderDetails::destroy($idod);
        $cmd = Order::destroy($id);
        if ($cmd) {
            Application::$app->session->setFlash('msg', 'Xóa bản ghi thành công');
            Application::$app->response->redirect('/admin/orderdetails');
        } else {
            Application::$app->session->setFlash('msg', 'Delete item error');
            Application::$app->response->redirect('/admin/orderdetails');
        }
    }
}
