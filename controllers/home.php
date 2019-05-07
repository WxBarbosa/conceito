<?php

class Home extends Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){ 
        $this->view->render('home/index',true);
    }

    // public function testsession(){  // Função teste de consulta SELECT e sessão
        
    //     $this->model->login();
    //     Session::init();
    //     if(Session::get('loggedIn')){
    //         echo 'Logado!';
    //     }else{
    //         echo 'Não Logado!';
    //     }
    // }

    public function GetAllCategories(){
        $categoryId = $_GET['categoryId']; 
        $sub_categoryId = $_GET['sub_categoryId'];
        $data = $this->model->GetAllCategories();
        echo  json_encode($data);
    }
}