<?php

namespace app\core;

use app\core\middlewares\BaseMiddleware;

class Controller
{

    public string $layout = 'main';
    public string $action = '';

    protected array $middlewares = [];

    public function render($view, $params = []): string
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }


    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}
// controller base mục đích để các controller có thể kế thừa vd usercontroller chứa các function chúng như render view setlayout , getmiddlewares ,...