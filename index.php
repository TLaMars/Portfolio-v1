<?php
//Get error messages
error_reporting(E_ALL); 
ini_set('display_errors', 1);

require_once('core/Router.php');
require_once('core/controller.php');

//Autoload for loading all files
function __spl_autoload_register($className) {
    if (file_exists('./models/'.$className.'.php')) {
        require_once './models/'.$className.'.php';
    } else if(file_exists('./controllers/'.$className.'.php')) {
        require_once './controllers/'.$className.'.php';
    } else if(file_exists('./core/'.$className.'.php')) {
        require_once './core/'.$className.'.php';
    }
}

$router = new Router();
?>
