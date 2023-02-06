<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\models\Product;
use app\models\Category;
use app\models\ProductCategory;
use DateTime;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['index', 'createView', 'create', 'edit', 'editView', 'destroy']));
    }

    public function index()
    {
        Application::$app->session->remove('confirmTemp');
        
        $q =  isset($_GET['q']) ? $_GET['q'] : null;
        $category_id =  isset($_GET['category_id']) ? $_GET['category_id'] : null;

        $where = "where true ";

        if ($q) {
            $where .=   "and products.name like '%$q%'";
        }
        if ($category_id) {
            $where .=   "and category_id like '%$category_id%'";
        }
        $sql = "SELECT products.*, categories.name as namect FROM products JOIN categories ON products.category_id = categories.id $where ORDER BY created_at DESC";
        $data = Application::$app->db->query($sql);
        $categories = Product::get(["category_id"]);
        $category = Category::get();

        $this->setLayout('admin');


        return $this->render('admin/products/index', [
            "q" => $q,
            "category_id" => $category_id,
            "categories" => $categories,
            "category" => $category,
            "data" => $data,
            "title" => "Product",
            "breadcrumbs" => [
                [
                    "link" => "/admin/products",
                    "label" => "Product"
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
        $data =  Application::$app->session->get('confirmTemp');
        $this->setLayout('admin');
        $categories = Category::get();

        return $this->render(
            'admin/products/create',

            [
                "data" => $data,
                "categories" => $categories,
                "title" => "Product",
                "breadcrumbs" => [
                    [
                        "link" => "/admin/products",
                        "label" => "Product"
                    ],
                    [
                        "link" => "#",
                        "label" => "confirm"
                    ],
                ]
            ]
        );
    }

    public function create(Request $request)
    {
        $classModel = new Product();
        $data = $request->getBody();
        $classModel->loadData($data);

        $now = new DateTime();
        $classModel->updated_at = $now->format('Y-m-d H:i:s');
        if ($classModel->validate()) {
            Application::$app->response->redirect('/admin/products/confirm?action=create');
            Application::$app->session->set('confirmTemp', $classModel);
        } else {
            Application::$app->session->setFlash('errors', $classModel->errors);
            Application::$app->response->redirect('/admin/products/create');
        }
    }

    public function confirmView()
    {

        $action = $_GET['action'];
        $data =  Application::$app->session->get('confirmTemp');
        $category = Category::findOne(["id"=>$data->category_id]);
        $this->setLayout('admin');
        return $this->render(
            'admin/products/confirm',
            [
                "action" => $action,
                "data" => $data,
                "title" => "Product",
                "category" => $category,
                "breadcrumbs" => [
                    [
                        "link" => "/admin/products",
                        "label" => "Product"
                    ],
                    [
                        "link" => "#",
                        "label" => "confirm"
                    ],
                ]
            ]
        );
    }


    public function confirm(Request $request)
    {
        $action = $_GET['action'];
        $classModel = Application::$app->session->get('confirmTemp');
        $now = new DateTime();
        $classModel->updated_at = $now->format('Y-m-d H:i:s');

        if ($action == 'create') {

            if ($classModel->validate() && $classModel->save()) {
                Application::$app->session->remove('confirmTemp');
                Application::$app->session->setFlash('msg', 'Thêm mới bản ghi thành công');
                Application::$app->response->redirect('/admin/products/complete?action=create');
            } else {

                Application::$app->session->setFlash('errors', $classModel->errors);
                Application::$app->response->redirect('/admin/products/create');
            }
        } else {
            $id = $_GET['id'];
            if ($classModel->validate() && $classModel->update()) {
                Application::$app->session->remove('confirmTemp');
                Application::$app->session->setFlash('msg', 'Cập nhật bản ghi thành công');
                Application::$app->response->redirect('/admin/products/complete?action=edit');
            } else {
                Application::$app->session->setFlash('errors', $classModel->errors);
                Application::$app->response->redirect("/admin/products/edit?id=$id");
            }
        }
    }

    public function editView()
    {
        $id = $_GET['id'];
        $data = Product::findOne(["id" => $id]);
        $categories = Category::findOne(["id"=>$data->category_id]);
        $category = Category::get();

        $this->setLayout('admin');
        return $this->render(
            'admin/products/edit',
            [
                "data" => $data,
                "category_id" => $category,
                "categories" => $categories,
                "title" => "Product",
                "breadcrumbs" => [
                    [
                        "link" => "/admin/products",
                        "label" => "Product"
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
        $classModel = new Product();
        $classModel->loadData($request->getBody());
        $classModel->id = $id;
        $now = new DateTime();
        $classModel->updated_at = $now->format('Y-m-d H:i:s');

        if ($classModel->validate()) {
            Application::$app->response->redirect('/admin/products/confirm?action=edit');
            Application::$app->session->set('confirmTemp', $classModel);
        } else {

            Application::$app->session->setFlash('errors', $classModel->errors);
            Application::$app->response->redirect("/admin/products/edit?id=$id");
        }
    }

    public function completeView()
    {

        $this->setLayout('admin');
        return $this->render(
            'admin/products/complete',
            [
                "title" => "Product",
                "breadcrumbs" => [
                    [
                        "link" => "/admin/products",
                        "label" => "Product"
                    ],
                    [
                        "link" => "#",
                        "label" => "complete"
                    ],
                ]
            ]
        );
    }


    public function destroy()
    {
        $id = $_GET['id'];
        $cmd = Product::destroy($id);
        if ($cmd) {
            Application::$app->session->setFlash('msg', 'Xóa bản ghi thành công');
            Application::$app->response->redirect('/admin/products');
        } else {
            Application::$app->session->setFlash('msg', 'Delete item error');
            Application::$app->response->redirect('/admin/products');
        }
    }
}
