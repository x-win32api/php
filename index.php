<?php

use App\Controllers\Err404Controller;
use App\Controllers\ErrorsController;
use App\Logger;
use Exceptions\DbExceptions;
use Exceptions\Err404Exceptions;
use SebastianBergmann\Timer\Timer;

require_once __DIR__ . '/autoload.php';

$timer = new Timer;
$timer->start();

$ctrl = $_GET['ctrl'] ?? 'Index';
$class = 'App\\Controllers\\' . ucfirst($ctrl) . 'Controller';

if (!class_exists($class)) {
    $controller = new Err404Controller("Ошибка 404!");
    $controller->action();
    exit();
}

try {
    $controller = new $class;
    $controller->action();

} catch (DbExceptions $e) {
    $log = new Logger($e);
    $log->warning("Ошибка соеденения");
    $controller = new ErrorsController($e);
    $controller->action();
} catch (Err404Exceptions $e) {
    $log = new Logger($e);
    $log->alert("404");
    $controller = new Err404Controller($e);
    $controller->action();
}

$duration = $timer->stop();
echo 'Время выполнения скрипта: '.$duration->asString();
