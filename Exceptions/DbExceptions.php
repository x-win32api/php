<?php

namespace Exceptions;

use Exception;

class DbExceptions extends Exception
{
    public $exceptionParamInfo;
    // Переопределим исключение так, что параметр message станет обязательным
    public function __construct($message, $code = 0, $exceptionParamInfo = '')
    {
        $this->exceptionParamInfo = $exceptionParamInfo;
        // некоторый код которым расширим принимаемые данные об ошибке

        // базовый конструктор
        parent::__construct($message,$code);
    }

    // Переопределим строковое представление объекта.
    public function __toString()
    {
        return __CLASS__ . " : [{$this->code}] : {$this->message}\nСтрока: {$this->exceptionParamInfo}\n{$this->getTraceAsString()}";
    }

}