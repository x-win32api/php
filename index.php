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
