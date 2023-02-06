<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\models\Category;
use DateTime;

class CategoriesController extends Controller
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

        $data = Category::whereLike($filter)->orderBy("created_at DESC")->get();


        $this->setLayout('admin');


        return $this->render('admin/category/index', [
            "q" => $q,
            "data" => $data,
            "title" => "Category",
            "breadcrumbs" => [
                [
                    "link" => "/admin/categories",
                    "label" => "Category"
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
        return $this->render(
            'admin/category/create',

            [
                "data" => $data,
                "title" => "Category",
                "breadcrumbs" => [
                    [
                        "link" => "/admin/category",
                        "label" => "Category"
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
        $classModel = new Category();
        $classModel->loadData($request->getBody());
        $now = new DateTime();
        $classModel->updated_at = $now->format('Y-m-d H:i:s');


        if ($classModel->validate()) {
            Application::$app->response->redirect('/admin/categories/confirm?action=create');
            Application::$app->session->set('confirmTemp', $classModel);
        } else {

            Application::$app->session->setFlash('errors', $classModel->errors);
            Application::$app->response->redirect('/admin/categories/create');
        }
    }

    public function confirmView()
    {

        $action = $_GET['action'];
        $data =  Application::$app->session->get('confirmTemp');

        $this->setLayout('admin');
        return $this->render(
            'admin/category/confirm',
            [
                "action" => $action,
                "data" => $data,
                "title" => "Category",
                "breadcrumbs" => [
                    [
                        "link" => "/admin/categories",
                        "label" => "Category"
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
                Application::$app->response->redirect('/admin/categories/complete?action=create');
            } else {

                Application::$app->session->setFlash('errors', $classModel->errors);
                Application::$app->response->redirect('/admin/categories/create');
            }
        } else {
            $id = $_GET['id'];
            if ($classModel->validate() && $classModel->update()) {
                Application::$app->session->remove('confirmTemp');
                Application::$app->session->setFlash('msg', 'Cập nhật bản ghi thành công');
                Application::$app->response->redirect('/admin/categories/complete?action=edit');
            } else {
                Application::$app->session->setFlash('errors', $classModel->errors);
                Application::$app->response->redirect("/admin/categories/edit?id=$id");
            }
        }
    }

    public function editView()
    {
        $id = $_GET['id'];
        $post = Category::findOne(["id" => $id]);

        $this->setLayout('admin');
        return $this->render(
            'admin/category/edit',
            [
                "data" => $post,
                "title" => "Category",
                "breadcrumbs" => [
                    [
                        "link" => "/admin/categories",
                        "label" => "Category"
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
        $classModel = new Category();
        $classModel->loadData($request->getBody());
        $classModel->id = $id;
        $now = new DateTime();
        $classModel->updated_at = $now->format('Y-m-d H:i:s');

        if ($classModel->validate()) {
            Application::$app->response->redirect('/admin/categories/confirm?action=edit');
            Application::$app->session->set('confirmTemp', $classModel);
        } else {

            Application::$app->session->setFlash('errors', $classModel->errors);
            Application::$app->response->redirect("/admin/categories/edit?id=$id");
        }
    }

    public function completeView()
    {

        $this->setLayout('admin');
        return $this->render(
            'admin/category/complete',
            [
                "title" => "Category",
                "breadcrumbs" => [
                    [
                        "link" => "/admin/categories",
                        "label" => "Category"
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
        $cmd = Category::destroy($id);
        if ($cmd) {
            Application::$app->session->setFlash('msg', 'Xóa bản ghi thành công');
            Application::$app->response->redirect('/admin/categories');
        } else {
            Application::$app->session->setFlash('msg', 'Delete item error');
            Application::$app->response->redirect('/admin/categories');
        }
    }
}