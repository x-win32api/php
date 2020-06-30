<?php


namespace App\Controllers\Admin;

use App\Controllers\BaseControllers;
use App\Models\Author;
use App\Models\News;

class AddController extends BaseControllers
{

    public function __invoke()
    {
        if (!$this->access()) {
            die("Доступ закрыт!");
        }

        if (isset($_POST['form_control'])) {

            $title = ($_POST['title']) ? $_POST['title'] : null;
            $content = ($_POST['title']) ? $_POST['content'] : null;

            if ($title && $content) {
                $news = new News();
                $news->title = $title;
                $news->content = $content;
                if ($news->save()) {

                    header('Location: ./index.php?ctrl=edit&id=' . $news->id);
                    exit();
                }
            }
        } else {

            $this->views->author = Author::getAll();
            print $this->views->render(__DIR__ . '/../../Views/v_edit_news.php');

        }

    }

}