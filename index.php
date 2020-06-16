<?php

use Models\News;
use Models\Product;

include 'Classes/Db/Db.php';
include 'Models/BaseDbModel.php';
include 'Models/NewsModel.php';
include 'Models/ProductModel.php';


$lastNews = News::findLastNews(3);
require_once(__DIR__.'/Views/v_index.php');

/* Ращличные вариации
//var_dump($Product->getAll());
var_dump(News::findById(10));
var_dump(News::findLastNews(3));

var_dump(Product::getAll());
var_dump(News::getAll());
*/