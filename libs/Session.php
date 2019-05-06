<?php

class Session{
    public static function init(){ // Inicia sessão
        session_start(); 
    }
    
    public static function set($key, $value){ // Seta uma chave + valor
        $_SESSION[$key] = $value;
    }
    
    public static function get($key){ // Retorna valor
        return $_SESSION[$key];
    }
    
    public static function destroy($key){ // Destrói sessão
        session_destroy();
    }
}