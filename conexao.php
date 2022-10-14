<?php

    // Dados de acesso ao banco de dados.
    define('HOST', '');
    define('USUARIO', '');
    define('SENHA', '');
    define('DB', '');
    
    // Criando conexão com o banco de dados.
    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

?>
