<?php

use Models\News;

require(__DIR__ . '/autoload.php');

# проверим пришел ли id и загрузим новость если все ок
$article = (isset($_GET['id'])) ? News::findById((int)$_GET['id']) : false;
# подключаем нужный шаблон
if ($article) {
    require_once(__DIR__ . '/Views/v_news.php');
} else {
    require_once(__DIR__ . '/Views/v_404.php');
}
