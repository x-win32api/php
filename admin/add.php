<?php

require_once __DIR__ . '/../autoload.php';

use App\Models\News;


if (isset($_POST['form_control'])) {

    $title = ($_POST['title']) ? $_POST['title'] : null;
    $content = ($_POST['title']) ? $_POST['content'] : null;

    if ($title && $content) {
        $news = new News();
        $news->title = $title;
        $news->content = $content;
        if ($news->save()) {

            header('Location: ./edit.php?id=' . $news->id);
            exit();
        }
    }
} else {

    require_once(__DIR__ . '/../App/Views/v_edit_news.php');

}










# проверим пришел ли id и загрузим новость если все ок

# подключаем нужный шаблон
