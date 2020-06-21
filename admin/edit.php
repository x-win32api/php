<?php


require_once __DIR__.'/../autoload.php';
use App\Models\News;


$news = (isset($_GET['id'])) ? News::findById((int)$_GET['id']) : null;

if($news) {

    if(isset($_POST['form_control'])){

        $title = ($_POST['title']) ? $_POST['title'] : null;
        $content = ($_POST['title']) ? $_POST['content'] : null;

        if($title && $content){

            $news->title = $title;
            $news->content = $content;
            $news->save();
        }
    }



    require_once(__DIR__ . '/../App/Views/v_edit_news.php');
}else {
    require_once(__DIR__ . '/../App/Views/v_404.php');
}




# проверим пришел ли id и загрузим новость если все ок

# подключаем нужный шаблон
