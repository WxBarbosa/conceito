<?php

class Database
{
       
    /*   
   * Atributo estático para instância do PDO   
   */   
   private static $pdo;  
 
   /*   
   * Escondendo o construtor da classe   
   */   
   private function __construct() {   
    
   }  

   public static function getInstance(){
        if (!isset(self::$pdo)) {   
            try {   
                $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_PERSISTENT => TRUE);   
                self::$pdo = new PDO(env['development']['dbtype'] . ':host=' . env['development']['host'] . ';dbname=' . env['development']['dbname'] , env['development']['user'] , env['development']['password'], $opcoes);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
            } catch (PDOException $e) {   
                print "\nErro: " . $e->getMessage();   
            }   
            return self::$pdo;   
        }  
   }
}