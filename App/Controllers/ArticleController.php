<?php

namespace App\Controllers;

use App\Models\News;
use Exceptions\Err404Exceptions;
class ArticleController extends BaseController
{
    public function __invoke()
    {
            $article = (isset($_GET['id'])) ? News::findById((int)$_GET['id']) : false;
            if (!empty($article)) {
                $this->views->news = $article;
                echo $this->views->render(__DIR__ . '/../Views/v_news.php');
            } else {
                throw new Err404Exceptions("Ошибка 404 страница не найдена!", '1', 'ID СТРАНИЦЫ: '.$_GET['id']);
            }


    }

}


