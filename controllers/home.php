<?php

class Home extends Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->view->render('home/index',true);
    }

    public function show($arg = null){
        if($arg == null){
            echo 'Argumentos vazios não são permitidos!';
        }else{
            echo 'Showzao';
        }
    }
}