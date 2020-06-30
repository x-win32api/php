<?php

namespace App\Controllers;

use App\Models\News;

class IndexController extends BaseControllers
{
    public function __invoke()
    {
        if (!$this->access()) { die("Доступ закрыт!"); }

            $this->views->lastNews = News::findLastNews(3);
            print $this->views->render(__DIR__ . '/../Views/v_index.php');

    }
}