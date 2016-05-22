<?php

/**
list($controller, $method) = explode('.',$_GET['action']);

if(empty($controller)) $controller = 'user';

require_once "controllers/".$controller.".php";

$controllerName = ucfirst($controller.'Controller');

$controllerInstance = new $controllerName();

if(empty($method)) $method = 'index';

$controllerInstance->$method();

*/

require 'views/welcome.php';
