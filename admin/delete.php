<?php
require_once __DIR__ . '/../autoload.php';

use App\Models\News;

$news = (isset($_GET['id'])) ? News::delete((int)$_GET['id']) : null;

if ($news) {

    header('Location: ./index.php');
    exit();
}


