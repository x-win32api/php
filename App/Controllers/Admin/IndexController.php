<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseControllers;
use App\Models\News;

class IndexController extends BaseControllers
{


    public function __invoke()
    {
        if (!$this->access()) {
            die("Доступ закрыт!");
        }
        $this->views->lastNews = News::getAll();
        print $this->views->render(__DIR__ . '/../../Views/v_admin_index.php');


    }


}