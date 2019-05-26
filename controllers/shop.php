<?php

class Shop extends Controller{

    function __construct(){
        parent::__construct();
    }

    public function index($id=null){ 
        if(!is_null($id)){
            $this->view->render('shop/index',true);
        }else{
            header("Location: ".URL."shop/index/1");
        }
    }

    public function GetProductsBySubCategoryId($id){
        if(isset($id)){
            $data = $this->model->GetProductsBySubCategoryId($id);
        }else{
            $data = [];
        }        
        print(json_encode($data,JSON_UNESCAPED_UNICODE));
    }

    public function GetSubCategoryById($id){
        if(isset($id)){
            $data = $this->model->GetSubCategoryById($id);
        }else{
            $data = [];
        }
        print(json_encode($data,JSON_UNESCAPED_UNICODE));
    }
}