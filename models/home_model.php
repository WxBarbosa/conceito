<?php

class Home_Model extends Model{

    function __construct(){
        parent::__construct();
    }

    public function login(){
        $sth = $this->db->prepare("SELECT * FROM cliente WHERE id=:id");

        $sth->execute(array(
            ':id' => $_GET['id']
        ));

        $data = $sth->fetchAll();

        //$count = $sth->rowCount();

        //if($count > 0){
        print_r($data);
        //}else{

        //}
    }
}