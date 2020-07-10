<?php

namespace App\Controllers;

use App\Models\News;

class ArticlesController extends BaseController
{

    public function __invoke()
    {
        $this->views->lastNews = News::getAll();
        echo $this->views->render(__DIR__ . '/../Views/v_allNews.php');

    }

}


