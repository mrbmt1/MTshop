<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\models\Post;
use app\models\User;
use app\models\Category;
use DateTime;

class PostController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['postAdmin']));
    }

    public function index()
    {
        $sql = "SELECT post.*, users.firstname, users.role FROM post JOIN users ON post.user_id = users.id where post.status = 1  ORDER BY post.id DESC LIMIT 5";
        $post = Application::$app->db->query($sql);
        $sql = "SELECT post.*, users.firstname, users.role FROM post JOIN users ON post.user_id = users.id where post.status = 1  ORDER BY post.amount DESC LIMIT 4";
        $dataN = Application::$app->db->query($sql);

        $this->setLayout(false);

        return $this->render('post', [
            'post' => $post,
            'dataN' => $dataN,
        ]);
    }

    public function postDetail()
    {
        $id = $_GET['id'];
        $post = Post::findOne(["id" => $id]);
        $user = User::findOne(["id" => $post->user_id]);
        $sql = "SELECT post.*, users.firstname, users.role FROM post JOIN users ON post.user_id = users.id where post.status = 1  ORDER BY post.id DESC LIMIT 4";
        $data = Application::$app->db->query($sql);
        $sql = "SELECT post.*, users.firstname, users.role FROM post JOIN users ON post.user_id = users.id where post.status = 1  ORDER BY post.amount DESC LIMIT 4";
        $dataN = Application::$app->db->query($sql);

        $post->amount = $post->amount + 1;
        $classModel = new Post();
        $classModel->loadData($post);
        $classModel->update();
        $this->setLayout(false);

        return $this->render('post-detail', [
            'post' => $post,
            'user' => $user,
            'dataN' => $dataN,
            'data' => $data
        ]);
    }

    public function postAdmin()
    {
        $sql = "SELECT post.*, users.firstname FROM post JOIN users ON post.user_id = users.id";
        $post = Application::$app->db->query($sql);
        $this->setLayout('admin');

        return $this->render('admin/post/index', [
            'data' => $post,
            "title" => "post",
            "breadcrumbs" => [
                [
                    "link" => "/admin/post",
                    "label" => "Post"
                ],
                [
                    "link" => "#",
                    "label" => "index"
                ],
            ]

        ]);
    }

    public function postCreateView()
    {
        $this->setLayout(false);

        return $this->render('create-post', [
        ]);
    }

    public function postCreate(Request $request)
    {
        $classModel = new Post();

        $user = Application::$app->session->get('user_');
        $data = $request->getBody();
        $data['user_id'] = $user->id;
        if($user->role == 1){
            $data['status'] = 1;
        }
        $classModel->loadData($data);
        if ($classModel->validate() && $classModel->save()) {
            Application::$app->response->redirect('/post');
        } else {
            Application::$app->session->setFlash('errors', $classModel->errors);
            Application::$app->response->redirect('/post-create');
        }
    }
    public function editView()
    {
        $id = $_GET['id'];
        $post = Post::findOne(["id" => $id]);

        $this->setLayout('admin');
        return $this->render(
            'admin/post/edit',
            [
                "data" => $post,
                "title" => "Post",
                "breadcrumbs" => [
                    [
                        "link" => "/admin/post",
                        "label" => "Post"
                    ],
                    [
                        "link" => "#",
                        "label" => "edit"
                    ],
                ]
            ]
        );
    }
    public function update(Request $request)
    {
        $id = (int)$_GET['id'] ?? 1;
        $update = (int)$_GET['update'] ?? 1;
        $classModel = new Post();
        $data = Post::findOne(['id' =>$id]);
        if($update){
            if($data->status == 0){
                $data->status = 1;
            }else{
                $data->status = 0;
            }
        }
        $classModel->loadData($data);
        $now = new DateTime();
        $classModel->updated_at = $now->format('Y-m-d H:i:s');

        $id = $_GET['id'];
        if ($classModel->validate() && $classModel->update()) {
            Application::$app->response->redirect('/admin/post');
            Application::$app->session->set('confirmTemp', $classModel);
        } else {
            Application::$app->session->setFlash('errors', $classModel->errors);
            Application::$app->response->redirect("/admin/post");
        }
    }

    public function edit(Request $request)
    {
        $id = $_GET['id'];
        $classModel = new Post();
        $status = Post::findOne(['id' =>$id]);

        $data = $request->getBody();
        $user = Application::$app->session->get('user_');
        $data['user_id'] = $user->id;
        $data['status'] = $status->status;

        $classModel->loadData($data);
        $classModel->id = $id;
        $now = new DateTime();
        $classModel->updated_at = $now->format('Y-m-d H:i:s');

        if ($classModel->validate() && $classModel->update()) {
            Application::$app->response->redirect('/admin/post');
            Application::$app->session->set('confirmTemp', $classModel);
        } else {
            Application::$app->session->setFlash('errors', $classModel->errors);
            Application::$app->response->redirect("/admin/post/edit?id=$id");
        }
    }

    public function destroy()
    {
        $id = (int)$_GET['id'];
        $cmd = Post::destroy($id);
        if ($cmd) {
            Application::$app->response->redirect('/admin/post');
        } else {
            Application::$app->session->setFlash('msg', 'Delete item error');
            Application::$app->response->redirect('/admin/post');
        }
    }
}
