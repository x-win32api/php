<?php

require_once __DIR__ . '/../autoload.php';

use App\Models\News;
use App\Models\Views;

# получаем последние новости


$views = new Views();
$views->lastNews = News::getAll();
print $views->render('v_admin_index');

# подключим шаблон
//require_once(__DIR__ . '/../App/Views/v_admin_index.php');



