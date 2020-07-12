<?php

function loadClass($classname)
{
    $filename = str_replace('\\', '/', __DIR__.'/'.$classname) . '.php';
    if (file_exists($filename)) {
        include($filename);
    }
}
spl_autoload_register('loadClass');

include __DIR__.'/vendor/autoload.php';