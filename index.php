<?php

use Models\News;

include 'Classes/Db/Db.php';
include 'Models/BaseDbModel.php';
include 'Models/News.php';


$lastNews = News::findLastNews(3);
require_once(__DIR__.'/Views/v_index.php');

/*
//var_dump($news->getAll());
var_dump(News::findById(10));
var_dump(News::findLastNews(3));*/