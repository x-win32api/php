<?php

function loadClass($classname)
{
    $filename = str_replace('\\', '/', __DIR__.'/'.$classname) . '.php';
    include($filename);
}

spl_autoload_register('loadClass');
