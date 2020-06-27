<?php

use Models\News;

include 'Db.php';
include 'Models/BaseDbModel.php';
include 'Models/NewsModel.php';
include 'Models/ProductModel.php';

# получаем последние новости 
$lastNews = News::findLastNews(3);
# подключим шаблон
require_once(__DIR__ . '/Views/v_index.php');

/* Различные вариации
//var_dump($Product->getAll());
var_dump(News::findById(10));
var_dump(News::findLastNews(3));

var_dump(Product::getAll());
var_dump(News::getAll());
*/