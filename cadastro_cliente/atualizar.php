<?php

    //Incluindo conexão com o banco de dados
    include('../conexao.php');

    //variaveis passada via post
    $acodigo = $_POST['id'];
    $aestado = $_POST['estado'];
    $anome = $_POST['nome'];
    $acpf = $_POST['cpf'];
    $aemail = $_POST['email'];
    $atelefone = $_POST['telefone'];

    //Scripts SQL
    $update = "UPDATE `cliente` SET nome = '$anome', cpf ='$acpf', email = '$aemail', telefone = '$atelefone', status = '$aestado'  WHERE cliente_id = '$acodigo'";
    $query = mysqli_query($conexao, $update) or die("Connection failed: " . mysqli_connect_error());

    //
    echo  "<script>alert('Dados atualizados com sucesso!');</script>";
    echo '<script>location.href = "cliente.php";</script>';

?>