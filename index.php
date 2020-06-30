<?php

require_once __DIR__ . '/autoload.php';

$ctrl = $_GET['ctrl'] ?? 'Index';
$class = 'App\\Controllers\\' . $ctrl . 'Controller';

if (class_exists($class)) {
    $controller = new $class;
    $controller();
} else {
    die('Неизвестная страница');
}