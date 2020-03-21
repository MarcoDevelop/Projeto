<?php
         
    include('../conexao.php');
    
    // Recebe o valor via post do formulário.
    $ecodigo = $_GET["codigo"];
    
    //Script SQL
    $consulta = "SELECT * FROM `usuario` WHERE usuario_id = '$ecodigo'";
    $con = mysqli_query($conexao, $consulta) or die("Erro ao tentar trazer registro");
    $linha = $con -> fetch_array();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Imagens/oleo_preto.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <title>Editar Registro</title>

</head>

<body>

    <div class="container">

        <br>

        <h4>Editar cadastro</h4>

        <hr>

        <a href="usuario.php" onclick="window.close()"><button class="btn btn-outline-dark">Voltar</button></a>

        <hr>

        <form name="frm_cadastro" action="cadastro_eusuario.php" method="post">            

            <div class="col-md-4 mb-3">

                <p class="text-primary">Codigo: <?php echo $ecodigo; ?></p>

                <input value="<?php echo $ecodigo; ?>" name="e_id" type="hidden">
                    
                <label>Usuário</label>

                <input value="<?php echo $linha['usuario']; ?>" name="e_usuario" type="text" class="form-control" placeholder="Usuário" autocomplete="off" required>

                <br>

                <label>Senha</label>
                    
                <input value="" name="e_senha" type="text" class="form-control" placeholder="Nova senha*" required>

                <br>

                <button title="Salvar" name="confirmar" type="submit" tabindex="9" class="btn btn-outline-success">Salvar</button>
                
            </div>

        </form>

    </div>

</body>

</html>