<?php 

class ThrowError extends Controller{
    public $msg = 'Ocorreu um erro!';
    
    function __construct($msg){
        parent::__construct();
        $this->view->msg = isset($msg) ? $msg : $this->view->msg;
        $this->view->render('error/index');
    }
}