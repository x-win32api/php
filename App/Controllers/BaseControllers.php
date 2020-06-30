<?php

namespace App\Controllers;

use App\Models\Views;

abstract class BaseControllers
{

    protected Views $views;

    public function __construct()
    {
        $this->views = new Views();
    }

    public function access()
    {
        return true;
    }
    abstract public function __invoke();
}