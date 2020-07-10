<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\News;

class DeleteController extends BaseController
{

    public function __invoke()
    {
        $news = (isset($_GET['id'])) ? News::delete((int)$_GET['id']) : null;
        if (empty($news)) {
            header('Location: ./index.php');
            exit();
        }

    }


}