<?php
class Bootstrap{
    function __construct(){
        $url = isset($_GET['url']) ? $_GET['url'] : null; //Retorna URL
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if(empty($url[0])){ // Verifica se existe algum controller setado, caso não exista é executado o padrão
            require 'controllers/home.php';
            $controller = new Home();
            $controller->index();
            return false;
        }

        $file = 'controllers/'. $url[0] .'.php'; // Recebe path

        if(file_exists($file)){ // Verifica se o controller é existente
            require $file; // Importa controller
        }else{
            $this->error('Controller não existente!'); // Retorna um erro
            return false; // Finaliza execução
        }
        
        $controller = new $url[0]; // Executa Objeto
        $controller->loadModel($url[0]); // Executa model se existente
        
        if(isset($url[1])){ // Verifica se método foi setado, caso não seja retorna um erro
            if(method_exists($url[0],$url[1])){ // Executa método
                if(isset($url[2])){ // Verifica se existem parametros setados
                    $controller->{$url[1]}($url[2]); // Executa método com parametros
                }else{
                    $controller->{$url[1]}(); // Executa método com parametro vazio
                }
            }else{
                $this->error('Método não existente!'); // Retorna um erro
                return false; // Finaliza execução
            }
        }else{
            $controller->index(); // Executa no controller padrão (home) e método index
        }
    }

    function error($msg){
        require 'controllers/throw_error.php'; // Importa class de error
        $controller = new ThrowError($msg); // Insere message de erro
    }
}