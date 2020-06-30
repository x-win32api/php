<?php

use App\Controllers\err404Controller;
use App\Controllers\ErrorsController;
use Exceptions\DbExceptions;
use Exceptions\Err404Exceptions;

require_once __DIR__ . '/autoload.php';

$ctrl = $_GET['ctrl'] ?? 'Index';
$class = 'App\\Controllers\\' . $ctrl . 'Controller';

if (!class_exists($class)) {
    $controller = new Err404Controller("Ошибка 404");
    $controller();
    exit();
}
try {
    $controller = new $class;
    $controller();
} catch (DbExceptions $e) {
    $controller = new ErrorsController($e);
    $controller();
} catch (Err404Exceptions $e) {
    $controller = new Err404Controller($e);
    $controller();
}



