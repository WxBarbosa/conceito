<?php
class Bootstrap{
    function __construct(){
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if(empty($url[0])){
            require 'controllers/home.php';
            $controller = new Home();
            $controller->index();
            return false;
        }

        $file = 'controllers/'. $url[0] .'.php';

        if(file_exists($file)){
            require $file;
        }else{
            require 'controllers/throw_error.php';
            $controller = new ThrowError('Controlador não existente!');
            return false;
        }
        
        $controller = new $url[0];
        
        if(isset($url[1])){
            if(method_exists($url[0],$url[1])){
                if(isset($url[2])){
                    $controller->{$url[1]}($url[2]);
                }else{
                    $controller->{$url[1]}();
                }
            }else{
                require 'controllers/throw_error.php';
                $controller = new ThrowError('Método não existente!');
                return false;
            }      
        }else{
            $controller->index();
        }
    }
}