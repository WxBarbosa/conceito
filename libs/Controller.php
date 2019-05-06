<?php

class Controller{
    function __construct(){
        $this->view = new View();
    }

    // Função responsável pela execução do model que é chamado no Bootstrap com base no Controller
    public function loadModel($name){
        $file = 'models/'.$name.'_model.php'; // Recebe path

        if(file_exists($file)){ // Verifica se existe
            require 'models/'.$name.'_model.php';  // Importa Model

            $modelName = $name.'_Model'; // Concatena nome do controller + _Model
            $this->model = new $modelName(); // Executa Model Class
        }
    }
}