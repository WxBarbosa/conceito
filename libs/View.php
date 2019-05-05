<?php

class View{

    function __construct(){
    }

    public function render($name,$inc = false){
        if(!$inc){
            require 'views/'.$name.'.php';
        }else{
            require 'views/header.php';
            require 'views/'.$name.'.php';
            require 'views/footer.php';
        }
    }

}