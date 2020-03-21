<?php

    // Conexão com o banco de dados.
    include('../conexao.php');
    
    // Variáveis recebidas via post do formulário.
    $nome_cliente = $_POST['nome_cliente'];
    $cpf_cliente = $_POST['cpf'];
    $email_cliente = $_POST['email_cliente'];
    $telefone_cliente = $_POST['telefone_cliente'];
    
    // Query de Insert no banco de dados.
    $query =  "INSERT INTO cliente (nome, cpf, email, telefone, status) VALUES ('$nome_cliente', '$cpf_cliente', '$email_cliente', '$telefone_cliente', '1');";
    mysqli_query($conexao, $query) or die("Connection failed: " . mysqli_connect_error());
    
    // Alerta de cadastro.
    echo "<script>alert('Cadastro realizado com sucesso!');</script>";

    // Volta para tela de cadastro.
    echo "<script>location.href = 'cliente.php';</script>";

?>