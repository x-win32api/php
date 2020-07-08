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

            $news = new News();
            $validate = $news->fill($_POST);
            if ($validate === true) {
                if ($news->save()) {
                    header('Location: ./index.php?ctrl=edit&id=' . $news->id);
                   exit();
                }else { print 'Сейв не отработал'; var_dump($news);}
            } else {
                $this->views->author = Author::getAll();
                $this->views->errors = $validate;
                print $this->views->render(__DIR__ . '/../../Views/v_edit_news.php');
            }


        } else {
             $this->views->author = Author::getAll();
            //     $this->views->errors = array();
            print $this->views->render(__DIR__ . '/../../Views/v_edit_news.php');

        }

    }

}