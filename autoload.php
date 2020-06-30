<?php

function loadClass($classname)
{
    $filename = str_replace('\\', '/', $classname) . '.php';
    if (file_exists($filename)) {
        include($filename);
    }

}

spl_autoload_register('loadClass');