<?php

function loadClass($classname) {
    $filename = str_replace('\\', '/', $classname).'.php';
    include ($filename);
}
spl_autoload_register('loadClass');