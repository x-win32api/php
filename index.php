<?php

use App\Controllers\err404Controller;
use App\Controllers\ErrorsController;
use App\Logger;
use Exceptions\DbExceptions;
use Exceptions\Err404Exceptions;

require_once __DIR__ . '/autoload.php';

$ctrl = $_GET['ctrl'] ?? 'Index';
$class = 'App\\Controllers\\' . ucfirst($ctrl) . 'Controller';

if (!class_exists($class)) {
    $controller = new Err404Controller("Ошибка 404");
    $controller();
    exit();
}
try {
    $controller = new $class;
    $controller->action();

} catch (DbExceptions $e) {
    $log = new Logger($e);
    $log->warning("Ошибка соеденения");

    $controller = new ErrorsController($e);
    $controller();
} catch (Err404Exceptions $e) {
    $log = new Logger($e);
    $log->alert("404");
    $controller = new Err404Controller($e);
    $controller();
}



