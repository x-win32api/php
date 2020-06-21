<?php

require_once __DIR__.'/../autoload.php';

use App\Models\News;

# получаем последние новости
$lastNews = News::getAll();

# подключим шаблон
require_once(__DIR__ . '/../App/Views/v_admin_index.php');




