<?php



use App\Models\News;

include 'Db.php';
include 'App/Models/BaseDbModel.php';
include 'App/Models/News.php';

# проверим пришел ли id и загрузим новость если все ок
$article = (isset($_GET['id'])) ? News::findById((int)$_GET['id']) : null;
# подключаем нужный шаблон
if($article) {
    require_once(__DIR__ . '/App/Views/v_news.php');
}else {
    require_once(__DIR__ . '/App/Views/v_404.php');
}