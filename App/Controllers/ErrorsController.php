<?php

namespace App\Controllers;

class ErrorsController extends BaseControllers
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

        $this->views->title = 'Возникла ошибка!';
        $this->views->content = $this->errorMassenge;

        print $this->views->render(__DIR__ . '/../Views/v_errors.php');

    }
}


