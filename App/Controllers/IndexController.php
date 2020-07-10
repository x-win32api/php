<?php

namespace App\Controllers;

use App\Models\News;

class IndexController extends BaseController
{
    public function __invoke()
    {
            $this->views->lastNews = News::findLastNews(3);
            echo $this->views->render(__DIR__ . '/../Views/v_index.php');

    }
}