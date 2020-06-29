<?php

use Models\News;

require(__DIR__ . '/autoload.php');

# получаем последние новости 
$lastNews = News::findLastNews(3);
# подключим шаблон
require_once(__DIR__ . '/Views/v_index.php');
