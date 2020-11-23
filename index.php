<?php

require_once __DIR__ . '/vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$splits = explode('/', $uri);

$controllerName = ucfirst($splits[1]) . 'Controller';
$actionName = $splits[2];

unset($splits[0]);
unset($splits[1]);
unset($splits[2]);

// require_once __DIR__ . '/controllers/' . $controllerName . '.php';

$controller = new $controllerName;

call_user_func_array(array($controller, $actionName), $splits);
