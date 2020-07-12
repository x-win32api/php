<?php

namespace App\Controllers;

use App\Models\Views;

abstract class BaseController
{

    protected Views $views;

    public function __construct()
    {
        $this->views = new Views();
    }

    public function action()
    {
        if ($this->access()) {

            $this->__invoke();
        } else {
            die('Доступ запрещен!');
        }

    }

    protected function access(): bool
    {
        return true;
    }

    abstract public function __invoke();
}