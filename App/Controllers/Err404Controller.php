<?php

namespace App\Controllers;

class Err404Controller extends BaseController
{
    public $errorMassenge;

    public function __construct($errorMassage)
    {
        $this->errorMassenge = $errorMassage;
        parent::__construct();
    }

    public function __invoke()
    {

        $this->views->title = 'Страница не найдена!';
        $this->views->content = $this->errorMassenge;
        //header("HTTP/1.0 404 Not Found");
        echo $this->views->render(__DIR__ . '/../Views/v_404.php');


    }
}


