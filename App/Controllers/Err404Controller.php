<?php

namespace App\Controllers;

class err404Controller extends BaseControllers
{
    public $errorMassenge;

    public function __construct($errorMassage)
    {
        $this->errorMassenge = $errorMassage;
        parent::__construct();
    }

    public function __invoke()
    {
        if (!$this->access()) {
            die("Доступ закрыт!");
        }

        $this->views->title = 'Страница не найдена!';
        $this->views->content = $this->errorMassenge;
        //header("HTTP/1.0 404 Not Found");
        print $this->views->render(__DIR__ . '/../Views/v_404.php');


    }
}


