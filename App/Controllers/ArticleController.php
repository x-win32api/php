<?php

namespace App\Controllers;

use App\Models\News;

class ArticleController extends BaseControllers
{

    public function __invoke()
    {
        if (!$this->access()) { die("Доступ закрыт!"); }

            $article = (isset($_GET['id'])) ? News::findById((int)$_GET['id']) : false;

            if ($article) {

                $this->views->news = $article;
                print $this->views->render(__DIR__ . '/../Views/v_news.php');

            } else {
                
                print $this->views->render(__DIR__ . '/../Views/v_404.php');
            }


    }

}


