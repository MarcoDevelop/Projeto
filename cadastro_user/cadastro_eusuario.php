<?php

    include('../conexao.php');

    $e_id = $_POST['e_id'];
    $euser = $_POST['e_usuario'];
    $epsw = $_POST['e_senha'];

    $query = "UPDATE usuario SET usuario = '$euser', senha = md5('$epsw') WHERE usuario_id = '$e_id'";

    mysqli_query($conexao, $query) or die("# Erro ao tentar atualizar cadastro!");
    mysqli_close($conexao);

    echo  "<script>alert('Usuário $euser foi alterado com sucesso!');</script>";
    echo '<script>location.href = "usuario.php";</script>';

?>
