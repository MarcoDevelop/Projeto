<?php

    // Dados de acesso ao banco de dados.
    define('HOST', 'sigmaplast.mysql.dbaas.com.br');
    define('USUARIO', 'sigmaplast');
    define('SENHA', 'Yabb11');
    define('DB', 'sigmaplast');
    
    // Criando conexão com o banco de dados.
    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

?>