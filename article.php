<?php

include 'autoload.php';

# проверим пришел ли id и загрузим новость если все ок
use App\Models\News;
use App\Models\Views;

$article = (isset($_GET['id'])) ? News::findById((int)$_GET['id']) : null;
$views = new Views();
# подключаем нужный шаблон
if ($article) {

    $views->news = $article;
    print $views->render("v_news");

} else {
    $views->render('v_404');
}