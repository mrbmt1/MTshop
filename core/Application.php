<?php

namespace app\core;

use app\core\db\Database;
use app\models\User;

class Application
{

    const EVENT_BEFORE_REQUEST = 'beforeRequest';
    const EVENT_AFTER_REQUEST = 'afterRequest';

    public static string $ROOT_DIR;
    public static Application $app;

    public Router $router;

    public Request $request;
    public Response $response;

    public ?Controller  $controller = null;

    public View $view;
    public string $layout = 'main';

    public Database $db;

    public Session $session;

    public ?User $user;


    public function __construct($rootPath, $config)
    {


        $this->user = null;
        $this->userClass = $config['userClass'];
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->view = new View();

        $this->db = new Database($config['db']);

        $this->session = new Session();

        $userId = Application::$app->session->get('user');
        if ($userId) {
            $key = $this->userClass::primaryKey();
            $this->user = $this->userClass::findOne([$key => $userId]);
        }
    }

    public static function isGuest()
    {
        return !self::$app->user;
    }

    public function login(User $user)
    {
        $this->user = $user;
        $primaryKey = $user->primaryKey();
        $value = $user->{$primaryKey};
        Application::$app->session->set('user', $value);
        Application::$app->session->set('user_', $this->user);
        return true;
    }

    public function logout()
    {
        $this->user = null;
        self::$app->session->remove('user');
        self::$app->session->remove('card');
        self::$app->session->remove('user_');
    }

    public function run()
    {
        try {
            echo $this->router->resolve();
        } catch (\Exception $e) {
            echo $this->router->renderViewOnly('_error', [
                'exception' => $e,
            ]);
        }
    }

    public function triggerEvent($eventName)
    {
        $callbacks = $this->eventListeners[$eventName] ?? [];
        foreach ($callbacks as $callback) {
            call_user_func($callback);
        }
    }

    public function on($eventName, $callback)
    {
        $this->eventListeners[$eventName][] = $callback;
    }

    public function showMsg($status)
    {
        if ($this->session->getFlash('msg')) {
            $msg = "";
            $msg = "<div class='alert alert-$status p-2'><p>";
            $msg .= $this->session->getFlash('msg');
            $msg .= '</p></div>';
            echo ($msg);
        }
    }


    public function showErrorMsgs($object = null, $showKey = true)
    {
        if ($this->session->getFlash('errors')) {
            $errors = "";
            $errors = "<div class='alert alert-danger p-2'>";
            foreach ($this->session->getFlash('errors') as $key => $values) {
 
                foreach ($values as $value) {
                    if ($object === 'products') {

                        if ($key === "firstname") {
                            $key = "t??n";
                        }
                        if ($key === "avatar") {
                            $key = "avatar";
                        }
                        if ($key === "price") {
                            $key = "price";
                        }
                        if ($key === "quantity") {
                            $key = "quantity";
                        }
                        if ($key === "sale") {
                            $key = "sale";
                        }
                        if ($key === "description") {
                            $key = "m?? t??? chi ti???t";
                        }
                    } else if ($object === 'categories') {

                        if ($key === "name") {
                            $key = "t??n danh m???c";
                        }
                        if ($key === "description") {
                            $key = "m?? t??? chi ti???t";
                        }
                    }else if ($object === 'orderdetails') {

                        if ($key === "name") {
                            $key = "t??n ti??u ?????";
                        }
                        if ($key === "avatar") {
                            $key = "???nh";
                        }
                        if ($key === "description") {
                            $key = "m?? t??? chi ti???t";
                        }
                    }else if ($object === 'post') {

                        if ($key === "title") {
                            $key = "t??n ti??u ?????";
                        }
                        if ($key === "avatar") {
                            $key = "???nh";
                        }
                        if ($key === "content") {
                            $key = "m?? t??? chi ti???t";
                        }
                    }else if ($object === 'users') {

                        if ($key === "firstname") {
                            $key = "h??? v?? t??n";
                        }
                        if ($key === "login_id") {
                            $key = "t??n ????ng nh???p";
                        }
                        if ($key === "avatar") {
                            $key = "???nh";
                        }
                        if ($key === "phone") {
                            $key = "S??? ??i???n tho???i";
                        }
                        if ($key === "diachi") {
                            $key = "?????a ch???";
                        }
                        if ($key === "avatar") {
                            $key = "???nh";
                        }
                        if ($key === "content") {
                            $key = "m?? t??? chi ti???t";
                        }
                    }
                    if ($key === "end_transaction_plan") {
                        $key = "th???i gian k???t th??c";
                    }

                    if ($key === "start_transaction_plan") {
                        $key = "th???i gian b???t ?????u";
                    }

                    if ($key === "password") {
                        $key = "m???t kh???u";
                    }
                    if ($key == "0") {
                        $key = "th??ng tin ????ng nh???p";
                    }
                    if ($showKey) {
                        $errors .= "<p>L???i $key</p>";
                    } else {
                        $errors .= "<p>$value</p>";
                    }
                    
                    if ($key == "0") {
                        $errors = "Sai th??ng tin ????ng nh???p";
                    }
                }
            }
            $errors .= '</div>';
            echo ($errors);
        }
    }
}
// class ch??nh t???ng h???p c??c ph????ng th???c v?? c??c ?????i t?????ng nh?? class database ????? query tr???c ti???p v?? c??c function ????? hi???n th??? th??ng b??o l???i ra ui
