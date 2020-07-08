<?php

namespace Exceptions;

use Exception;

class Err404Exceptions extends Exception
{
    public $data;
    // Переопределим исключение так, что параметр message станет обязательным
    public function __construct($message, $code = 0, $data = '')
    {
        $this->data = $data;

        parent::__construct($message,$code);
    }

    // Переопределим строковое представление объекта.
    public function __toString()
    {
        return __CLASS__ . " : [{$this->code}] : {$this->message}\nСтрока: {$this->data}\n{$this->getTraceAsString()}";
    }

}