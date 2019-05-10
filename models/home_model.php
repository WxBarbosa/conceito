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

    public function GetAllMenuCategories(){
        $sth = $this->db->prepare("SELECT * FROM categorias");
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function GetAllMenuSubCategories(){
        //$sth = $this->db->prepare("SELECT sCat.id,sCat.nome FROM sub_categorias AS sCat INNER JOIN categorias AS Cat ON Cat.id = sCat.id_categoria");
        $sth = $this->db->prepare("SELECT * FROM sub_categorias");
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function GetSubCategoriesByCategoryId($id){
        //$sth = $this->db->prepare("SELECT sCat.id,sCat.nome FROM sub_categorias AS sCat INNER JOIN categorias AS Cat ON Cat.id = sCat.id_categoria");
        $sth = $this->db->prepare("SELECT id,nome FROM sub_categorias WHERE :id = id_categoria");
        $sth->bindValue(":id",$id);
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function GetUser($id){
        //$sth = $this->db->prepare("SELECT sCat.id,sCat.nome FROM sub_categorias AS sCat INNER JOIN categorias AS Cat ON Cat.id = sCat.id_categoria");
        $sth = $this->db->prepare("SELECT * FROM cliente WHERE :id = id");
        $sth->bindValue(":id",$id);
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function GetProduct($name){
        $sth = $this->db->prepare("SELECT cli.nome, prod.nome, c.preco FROM compra AS c INNER JOIN cliente AS cli ON cli.id=c.id_cliente INNER JOIN produto AS prod ON c.id_produto = prod.id WHERE prod.nome LIKE :nome ");
        $sth->bindValue(":nome",$name);
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
}