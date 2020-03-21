<?php

    include('../conexao.php');

    $user = $_POST['user'];
    $psw = $_POST['psw'];

    $query = "insert into usuario (usuario,  senha) values ('$user', md5('$psw'));";

    mysqli_query($conexao, $query) or die("Connection failed: " . mysqli_connect_error());
    mysqli_close($conexao);
    echo  "<script>alert('Usuário $user cadastrado com sucesso!');</script>";
    echo '<script>location.href = "usuario.php";</script>';

?>
