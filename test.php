<?php

use App\Logger;
use Exceptions\DbExceptions;

include 'autoload.php';


$x = false;
if(empty($x)){ print '100'; } else { echo 200;}




$exc = new DbExceptions('Ошибка при выполнении запроса ', 0, 'Разная информация');
$test = new Logger($exc);
$test->info('Определенный текст');




var_dump($exc);

$uri = $_SERVER['REQUEST_URI'];
$request = explode('/', $uri);

var_dump($request);

if(preg_match('/^[0-9]+$/', '10a0')){
    print 'Число';
}


$array = array(

    'foo' => 'bar',

    'helo' => 'world',

    'array' => array(1, 2)

);



$log = date('Y-m-d H:i:s') . ' ' . print_r($array, true);

file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);

?>