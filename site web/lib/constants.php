<?php
    $directory = basename(dirname(dirname(__FILE__)));
    $url = explode($directory,$_SERVER['REQUEST_URI']);
    if(count($url) == 1){
        define('WEBROOT','/');
    }
    define('WEBROOT',$url[0].'dema/');
