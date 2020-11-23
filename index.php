<?php

require_once __DIR__ . '/vendor/autoload.php';

use function Symfony\Component\String\s;

$uri = $_SERVER['REQUEST_URI'];

$splits = explode('/', $uri);

$controllerName = s($splits[1] . 'Controller')->camel()->title()->toString();
$actionName = s($splits[2])->camel()->toString();

unset($splits[0]);
unset($splits[1]);
unset($splits[2]);

// require_once __DIR__ . '/controllers/' . $controllerName . '.php';

$controller = new $controllerName;

call_user_func_array(array($controller, $actionName), $splits);
