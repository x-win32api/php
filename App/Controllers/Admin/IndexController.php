<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Models\News;

class IndexController extends BaseController
{


    public function __invoke()
    {
        if (!$this->access()) {
            die("Доступ закрыт!");
        }
        $this->views->lastNews = News::getAll();
        echo $this->views->render(__DIR__ . '/../../Views/v_admin_index.php');


    }


}