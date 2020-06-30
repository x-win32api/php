<?php

use Exceptions\DbExceptions;

include 'DbExceptions.php';

    try {

        News();

    } catch (DbExceptions $e) {
        print $e;
    }

    function News()
    {
        if (Test('100')) throw new DbExceptions("Configuration file not found.", '100', 'sql where id = 100');
    }

    function Test($a)
    {
        return true;
    }

?>