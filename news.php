<?php

use Models\News;

include 'Db.php';
include 'Models/BaseDbModel.php';
include 'Models/NewsModel.php';

# проверим пришел ли id и загрузим новость если все ок
$article = (isset($_GET['id'])) ? News::findById((int)$_GET['id']) : null;
# подключаем нужный шаблон
if($article) {
    require_once(__DIR__.'/Views/v_news.php');
}else {
    require_once(__DIR__.'/Views/v_404.php');
}