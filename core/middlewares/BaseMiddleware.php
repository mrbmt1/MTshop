<?php

namespace app\core\middlewares;

abstract class BaseMiddleware
{
    abstract public function execute();
}
// class base để middlewares có thể kế thừa