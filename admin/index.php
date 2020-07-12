<?php
require_once __DIR__ . '/../autoload.php';

$ctrl = $_GET['ctrl'] ?? 'Index';
$class = 'App\\Controllers\\Admin\\' . $ctrl . 'Controller';


if (class_exists($class)) {
    $controller = new $class;
    $controller->action();
} else {
    die('Неизвестная страница?');
}
