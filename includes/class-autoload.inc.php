<?php
spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    //Website: http://www.geeksforgeeks.org
    //HTTP_HOST: www.geeksforgeeks.org
    //$_SERVER['REQUEST_URI'] will give you:
    ///some-dir/yourpage.php?q=bogus&n=10 will give  
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes') !== false) {

        $path = '../classes/';
    } else {
        $path = 'classes/';
    }

    $extension = '.class.php';
    require_once $path . $className . $extension;
}
