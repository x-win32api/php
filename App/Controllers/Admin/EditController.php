<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Models\Author;
use App\Models\News;
use Exceptions\Err404Exceptions;

class EditController extends BaseController
{

    public function __invoke()
    {
            $news = (isset($_GET['id'])) ? News::findById((int)$_GET['id']) : false;

        if (!empty($news)) {

            if (isset($_POST['form_control'])) {

                $title = ($_POST['title']) ? $_POST['title'] : false;
                $content = ($_POST['title']) ? $_POST['content'] : false;
                $author_id = ($_POST['author_id']) ? $_POST['author_id'] : false;


                if (empty($title) && empty($content)) {

                    $news->title = $title;
                    $news->content = $content;
                    $news->author_id = $author_id;

                    $news->save();
                }
            }

            $this->views->content = $news;
            $this->views->author = Author::getAll();
            echo $this->views->render(__DIR__ . '/../../Views/v_edit_news.php');


        } else {
            throw new Err404Exceptions("Ошибка 404 страница не найдена!", '1', 'ID '.$_GET['id']);
        }
    }


}