<?php

use Models\News;

include 'Classes/Db/Db.php';
include 'Models/BaseDbModel.php';
include 'Models/NewsModel.php';


$article = (isset($_GET['id'])) ? News::findById((int)$_GET['id']) : null;

if($article) {
    require_once(__DIR__.'/Views/v_news.php');
}else {
    require_once(__DIR__.'/Views/v_404.php');
}



/*
//var_dump($news->getAll());
var_dump(News::findById(10));
var_dump(News::findLastNews(3));*/