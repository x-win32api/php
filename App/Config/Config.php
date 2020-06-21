<?php


namespace App\Config;


class Config
{
    public $data;

    private static $instance;

    public static function getInstance() {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {

        $this->data = include(__DIR__ . '/../../config.php');

    }
}