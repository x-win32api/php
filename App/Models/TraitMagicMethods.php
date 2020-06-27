<?php

namespace App\Models;

trait TraitMagicMethods
{
    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        return $this->data[$name] ?? false;
    }
}