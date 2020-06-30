<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseControllers;
use App\Models\Author;
use App\Models\News;
use Exceptions\Err404Exceptions;

class EditController extends BaseControllers
{

    public function __invoke()
    {
        if (!$this->access()) {
            die("Доступ закрыт!");
        }

        $news = (isset($_GET['id'])) ? News::findById((int)$_GET['id']) : null;

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

            $this->views->content = $news;
            $this->views->author = Author::getAll();
            print $this->views->render(__DIR__ . '/../../Views/v_edit_news.php');


        } else {
            throw new Err404Exceptions("Ошибка 404 страница не найдена!", '1', 'ID '.$_GET['id']);
        }
    }


}