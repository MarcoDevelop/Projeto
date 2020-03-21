<?php

    // Conexão com o banco de dados.
    include('../conexao.php');
    
    // Variável recebida via post do formulário.
    $pesquisar = $_POST['pesquisar'];

    // query select no banco de dados.
    $result = "SELECT * FROM cliente WHERE cpf LIKE '%$pesquisar%'";
    $resultado = mysqli_query($conexao, $result);
    $rows = mysqli_fetch_array($resultado);
    
    // If para verificar o resultado da query.
    if($rows != null){
        echo $rows['cliente_id'] , $rows['nome'];
    }

?>