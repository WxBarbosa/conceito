<?php

class View{

    function __construct(){
    }

    public function render($name,$includes = false){ // Renderiza a view (com includes padrões == true || sem includes == false)
        if(!$includes){
            require 'views/'.$name.'.php';
        }else{
            require 'views/header.php';
            require 'views/categories.php';
            require 'views/'.$name.'.php';
            require 'views/footer.php';
        }
    }

}