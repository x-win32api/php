<?php

namespace App\Controllers;

class ErrorsController extends BaseController
{
    public $errorMassenge;

    public function __construct($errorMassage)
    {
        $this->errorMassenge = $errorMassage;
        parent::__construct();
    }

    public function __invoke()
    {
        $this->views->title = 'Возникла ошибка!';
        $this->views->content = $this->errorMassenge;

        echo $this->views->render(__DIR__ . '/../Views/v_errors.php');

    }
}


