<?php

class Model {

    function __construct(){
        $this->db = Database::getInstance(); // Cria nova conexão
    }
 
}