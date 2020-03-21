<?php

    session_start();
    include('verifica_login.php');
     
    include('../conexao.php');

    $consulta = "SELECT * FROM `usuario` ORDER BY `usuario_id` ASC";

    $con = mysqli_query($conexao, $consulta) or die("Connection failed: " . mysqli_connect_error());
    
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuários</title>
    <link rel="shortcut icon" href="../Imagens/oleo_preto.png">
    <script src="../js/script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
</head>

<body>

    <br>

    <div class="container">

        <h4>Cadastro de usuário</h4>         

        <hr>

            <a title="Voltar a tela anterior" href="../principal/painel.php"><button class="btn btn-outline-dark">Voltar</button></a>

        <hr>

        <div class="jumbotron">  

            <form name="frm_cadastro" action="cadastro_usuario.php" method="post">

                <div class="col-md-4 mb-3">
                    <label for="validationDefault01">Usuário</label>
                    <input tabindex="2" name="user" type="text" class="form-control" id="validationDefault01" placeholder="Usuário" autocomplete="off" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationDefault01">Senha</label>
                    <input tabindex="3" name="psw" type="password" class="form-control" id="validationDefault01" placeholder="Senha" autocomplete="off" required>
                </div>
                
                <div class="col-md-4 mb-3">
                    <button tabindex="4" name="cadastrar" type="submit" tabindex="9" class="btn btn-outline-success">Cadastrar</button>
                </div>

            </form>

        </div>

        <div class="col-md-0 mb-3">
            <h4>Lista de usuários cadastrados</h4>
        </div>

        <br>

        <div class="row marketing">

            <div class="col-lg-12">

                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th># Código</th>
                            <th>Usuário</th>
                            <th>Senha Criptografada</th>
                            <th>Modificar</th>
                        </tr>
                    </thead>

                    <?php
                        while($dado = $con -> fetch_array()){
                    ?>

                    <tbody>

                        <tr>
                            <td><?php echo $dado ['usuario_id']; ?></td>
                            <td><?php echo $dado ['usuario']; ?></td>        
                            <td><?php echo $dado ['senha']; ?></td>
                            <td>
                            
                                <a title="Editar registro" href="editar.php?codigo=<?php echo $dado['usuario_id'];?>"><button tabindex="5" class="btn btn-outline-warning">Editar</button></a> 
                                <a title="Remover registro" href="remover.php?codigo=<?php echo $dado["usuario_id"];?>"><button tabindex="6" class="btn btn-outline-danger">Remover</button></a>
                            
                            </td>
                        </tr>

                    </tbody>
                    
                    <?php
                        }
                    ?>

                </table>

                <br>

            </div>  

        </div>    

    </div>

</body>

</html>