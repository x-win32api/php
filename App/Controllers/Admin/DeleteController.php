<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseControllers;
use App\Models\News;

class DeleteController extends BaseControllers
{

    public function __invoke()
    {
        if (!$this->access()) {
            die("Доступ закрыт!");
        }

        $news = (isset($_GET['id'])) ? News::delete((int)$_GET['id']) : null;

        if ($news) {
            header('Location: ./index.php');
            exit();
        }

    }


}