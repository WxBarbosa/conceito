<?php

class Database extends PDO
{
    // Constrói string de conexão
    public function __construct(){
        parent::__construct(env['development']['dbtype'] . ':host=' . env['development']['host'] . ';dbname=' . env['development']['dbname'] , env['development']['user'] , env['development']['password']);
    }

}