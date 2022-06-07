<?php 
spl_autoload_register(function ($class){
    $class = '/'.str_replace('\\', '/', $class);
    $dir = str_replace('\\', '/', __DIR__);
    $file =  $dir.$class.'.php';
    if(is_readable($file)){
        require_once $file;
    }else{
        echo "Not files";
    }
});