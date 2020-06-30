<?php

namespace Exceptions;

use Exception;

class DbExceptions extends Exception
{
    public $data;
    // Переопределим исключение так, что параметр message станет обязательным
    public function __construct($message, $code = 0, $data = '')
    {
        $this->data = $data;
        // некоторый код

        // убедитесь, что все передаваемые параметры верны
        parent::__construct($message,$code);
    }

    // Переопределим строковое представление объекта.
    public function __toString()
    {

        return __CLASS__ . " : [{$this->code}] : {$this->message}\nСтрока: {$this->data}\n{$this->getTraceAsString()}";
    }

    public function customFunction()
    {
        echo "Мы можем определять новые методы в наследуемом классе\n";
    }

}