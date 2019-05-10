<?php

const env = array( // Variavel de ambiente de desenvolvimento (teste x produção)
    'development'=>array(
        'dbtype'=>'mysql',  //Tipo de base
        'host'=>'localhost',  // Nome do host
        'user'=>'gretzki', // Usuário
        'password'=>'123456', // Senha
        'dbname'=>'conceito' // Nome da tabela
    ),'production'=>array(
        'dbtype'=>'',
        'host'=>'',
        'user'=>'',
        'password'=>'',
        'dbname'=>''
    )
);