<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\models\LoginForm;
use app\models\User;

class AuthController extends Controller
{


    public function showLogin()
    {
        $loginForm = new LoginForm();

        $this->setLayout(false);
        return $this->render('login', [
            'model' => $loginForm
        ]);
    }

    public function login(Request $request)
    {
        $loginForm = new LoginForm();
        $rd = 0;
        $id = 0;
        if((int)$_GET['rd']){
            $rd = (int)$_GET['rd'];
        }
        if((int)$_GET['id']){
            $id = (int)$_GET['id'];
        }
        $loginForm->loadData($request->getBody());
        if ($loginForm->validate() && $loginForm->login()) {
            $user = Application::$app->session->get('user_');
            switch ($rd) {
                case 1:
                    return Application::$app->response->redirect('/thongtin');
                break;
                case 2:
                    if($user->role == 0){
                        Application::$app->session->setFlash('errors', [0=>['login' => 'false']]);
                        return Application::$app->response->redirect('/login');
                    } else {
                        return Application::$app->response->redirect('/admin/dashboard');
                    }
                break;
                case 3:
                    return Application::$app->response->redirect('/card');
                break;
                case 4:
                    return Application::$app->response->redirect('/product-detail?id='.$id.'');
                break;
                default:
                    return Application::$app->response->redirect('/');
              }
        } else {
            if($rd == 2){
                Application::$app->session->setFlash('errors', [0=>['login' => 'false']]);
                return Application::$app->response->redirect('/login');
            }else{
                return Application::$app->response->redirect('/');
            }
        }
    }


    public function showRegister()
    {
        $registerModel = new User();

        $this->setLayout(false);
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }

    public function register(Request $request)
    {
        $role = 0;
        $rd = 0;
        if($_GET['role']){
            $role = (int)$_GET['role'];
        }
        if($_GET['rd']){
            $rd = (int)$_GET['rd'];
        }
        $registerModel = new User();
        $data = $request->getBody();
        $data['role'] = $role;
        $user = User::get();
        
        switch ($rd) {
            case 1:
                foreach ($user as $value){
                    if($data['login_id'] == $value->login_id){
                        Application::$app->session->setFlash('msg', 'Tên đăng nhập đã có');
                        return Application::$app->response->redirect('/register');
                    }
                }
                $registerModel->loadData($data);
                if ($registerModel->validate() && $registerModel->save()) {
                    Application::$app->session->setFlash('msg', 'Đăng ký thành công');
                    return Application::$app->response->redirect('/login');
                }
                else {
                    Application::$app->session->setFlash('errors', $registerModel->errors);
                    return Application::$app->response->redirect('/register');
                }
              break;
            default:
                foreach ($user as $value){
                    if($data['login_id'] == $value->login_id){
                        Application::$app->session->setFlash('msg', 'Tên đăng nhập đã có');
                        return Application::$app->response->redirect('/');
                    }
                }
                $registerModel->loadData($data);
                if ($registerModel->validate() && $registerModel->save()) {
                    Application::$app->session->setFlash('msg', 'Đăng ký thành công');
                    return Application::$app->response->redirect('/');
                }
                else {
                Application::$app->session->setFlash('errors', $registerModel->errors);
                return Application::$app->response->redirect('/');
                }
          }
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $rd = 0;
        if((int)$_GET['rd']){
            $rd = (int)$_GET['rd'];
        }
        switch ($rd) {
            case 1:
                return $response->redirect('/login');
              break;
            case 2:
                return $response->redirect('/');
              break;
            case 3:
                return  $response->redirect('/');
            break;
            default:
                return $response->redirect('/');
          }
    }
}
