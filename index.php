<?php
list($controller, $method) = explode('.',$_GET['action']);

if(empty($controller)) $controller = 'user';

require_once "controllers/".$controller.".php";

$controllerName = ucfirst($controller.'Controller');

$controllerInstance = new $controllerName();

$controllerInstance->$method();
