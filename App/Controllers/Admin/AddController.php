<?php


namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Author;
use App\Models\News;

class AddController extends BaseController
{
    public function __invoke()
    {
        if (isset($_POST['form_control'])) {
            $news = new News();
            $validate = $news->fill($_POST);
            if ($validate === true) {
                if ($news->save()) {
                    header('Location: ./index.php?ctrl=edit&id=' . $news->id);
                    exit();
                } else {
                    print 'Ошибка сохранения';
                }
            } else {
                $this->views->author = Author::getAll();
                $this->views->errors = $validate;
                echo $this->views->render(__DIR__ . '/../../Views/v_edit_news.php');
            }

        } else {
            $this->views->author = Author::getAll();
            echo $this->views->render(__DIR__ . '/../../Views/v_edit_news.php');

        }
    }
}