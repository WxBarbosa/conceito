<?php

class Home_Model extends Model{

    function __construct(){
        parent::__construct();
    }

    public function GetAllCategories(){
        $sth = $this->db->prepare("SELECT * FROM categorias INNER JOIN sub_categorias ON categorias.id = sub_categorias.id_categorias ORDER BY categorias.nome, sub_categorias.nome");
        $sth->execute();
        $data = $sth->fetchAll();        
        return $data;
    }
}