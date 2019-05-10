<?php

class Home extends Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){ 
        $this->view->render('home/index',true);
    }

    public function GetAllMenuCategories(){
        $data = $this->model->GetAllMenuCategories();
        print(json_encode($data,JSON_UNESCAPED_UNICODE));
    }

    public function GetAllMenuSubCategories(){
        $data = $this->model->GetAllMenuSubCategories();
        print(json_encode($data,JSON_UNESCAPED_UNICODE));
    }

    public function GetSubCategoriesByCategoryId($id){
        if(isset($id)){
            $data = $this->model->GetSubCategoriesByCategoryId($id);
        }else{
            $data = [];
        }        
        print(json_encode($data,JSON_UNESCAPED_UNICODE));
    }

    public function GetUser($id){
    
        if(isset($id)){
            $data = $this->model->GetUser($id);
        }else{
            $data = [];
        }        
        print(json_encode($data,JSON_UNESCAPED_UNICODE));
    }

    public function GetProduct($name){
        if(isset($name)){
            $data = $this->model->GetProduct($name);
        }else{
            $data = [];
        }        
        print(json_encode($data,JSON_UNESCAPED_UNICODE));
    }
}