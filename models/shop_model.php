<?php

class Shop_Model extends Model{

    function __construct(){
        parent::__construct();
    }

    public function GetProductsBySubCategoryId($id){
        $sth = $this->db->prepare("SELECT prod.id AS id, prod.nome AS nome, prod.preco AS preco, prod.imagem AS imagem FROM produto AS prod WHERE prod.id_sub_categoria = :id_sub_categoria ");
        $sth->bindValue(":id_sub_categoria",$id, PDO::PARAM_STR);
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function GetSubCategoryById($id){
        $sth = $this->db->prepare("SELECT cat.id AS id, cat.nome AS nome FROM sub_categorias AS cat WHERE cat.id = :id_sub_categoria ");
        $sth->bindValue(":id_sub_categoria",$id, PDO::PARAM_STR);
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
}