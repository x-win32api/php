<?php

namespace Models;

class Product extends BaseDbModel
{
    protected const TABLE = 'product';
    public $name;
    public $desk;
    public $price;
}


?>