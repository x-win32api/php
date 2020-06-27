<?php


require_once __DIR__ . '/../autoload.php';

use App\Models\Author;
use App\Models\News;
use App\Models\Views;


$news = (isset($_GET['id'])) ? News::findById((int)$_GET['id']) : null;

$views = new Views();

if ($news) {

    if (isset($_POST['form_control'])) {

        $title = ($_POST['title']) ? $_POST['title'] : null;
        $content = ($_POST['title']) ? $_POST['content'] : null;
        $author_id = ($_POST['author_id']) ? $_POST['author_id'] : null;


        if ($title && $content) {

            $news->title = $title;
            $news->content = $content;
            $news->author_id = $author_id;

            $news->save();
        }
    }

    $views->content = $news;
    $views->author = Author::getAll();
    print $views->render('v_edit_news');


} else {
    print $views->render('_404');
}



