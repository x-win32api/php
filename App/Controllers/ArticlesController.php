<?php

namespace App\Controllers;

use App\Models\News;

class ArticlesController extends BaseControllers
{

    public function __invoke()
    {
        if (!$this->access()) { die("Доступ закрыт!"); }

        $this->views->lastNews = News::getAll();
        print $this->views->render(__DIR__ . '/../Views/v_allNews.php');

    }

}


