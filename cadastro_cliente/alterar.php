<?php

    //Incluindo conexão com o banco de dados
    include('../conexao.php');

    // Recebe o valor via post do formulário.
    $codigo = $_GET["codigo"];

    //Script SQL
    $consulta = "SELECT * FROM `cliente` WHERE cliente_id = '$codigo'";
    $query = mysqli_query($conexao, $consulta) or die("Connection failed: " . mysqli_connect_error());
    $linha = $query -> fetch_array();

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
    
    <script>
    
        function estado(){

            if(document.getElementById("customControlAutosizing").checked){
                
                document.getElementById("nome").disabled = false;
                document.getElementById("cpf").disabled = false;
                document.getElementById("email").disabled = false;
                document.getElementById("telefone").disabled = false;
                document.getElementById("botao").disabled = false;
                var estado = 1;
                document.getElementById("status").value = ;
                
            }else{

                document.getElementById("nome").disabled = true;
                document.getElementById("cpf").disabled = true;
                document.getElementById("email").disabled = true;
                document.getElementById("telefone").disabled = true;
                document.getElementById("botao").disabled = true;
                var estado = 0;
                document.getElementById("status").value = '0';

            }

        }
    
    </script>
   
</head>

<body onload="estado()">

    <div class="container">

        <br>

        <h4>Editar cadastro</h4>

        <hr>

            <a title="Voltar a tela anterior" href="cliente.php"><button class="btn btn-outline-dark">Voltar</button></a>

        <hr>

        <p class="text-primary">Código: <?php echo $codigo; ?></p>

        <form name="frm_cadastro" action="atualizar.php" method="post">
            
            <input value="<?php echo $codigo; ?>"name="id" type="hidden">

            <div class="form-row">
                <div class="col">
                    <label>Nome do cliente:</label>
                    <input id="nome" value="<?php echo $linha['nome']; ?>" type="text" name="nome" class="form-control" title="Preencher com o nome" maxlength="60" placeholder="Nome" autocomplete="off" required>
                </div>
                <div class="col">
                    <label>CPF:</label>
                    <input id="cpf" value="<?php echo $linha['cpf']; ?>" type="text" name="cpf" class="form-control" title="Preencher com o CPF" placeholder="000.000.000-00" maxlength="14" autocomplete="off">
                </div>
            </div>

            <br>
            
            <div class="form-row" >
                <div class="col">
                    <label>E-mail:</label>
                    <input id="email" value="<?php echo $linha['email']; ?>" type="email" name="email" class="form-control" title="Preencher com o e-mail" placeholder="exemplo@dominio.com" maxlength="60" style='text-transform:lowercase' autocomplete="off" required>
                </div>
                <div class="col">
                    <label>Numero de telefone:</label>
                    <input id="telefone" value="<?php echo $linha['telefone']; ?>" type="tel" name="telefone" class="form-control" title="Preencher com o DD depois o numero" maxlength="14" placeholder="11999990000" autocomplete="off" required>
                </div>
            </div>
        
            <br>

            <input id="status" nome="estado" value="1" type="text" style="display:none">

            <?php

                $linha ['status'];

                if($linha ['status'] == 1){

                    echo '<div class="custom-control custom-checkbox mr-sm-2"><input onClick="estado()" type="checkbox" class="custom-control-input" id="customControlAutosizing" checked><label class="custom-control-label" for="customControlAutosizing">Status</label></div>';

                }else{

                    echo '<div class="custom-control custom-checkbox mr-sm-2"><input onClick="estado()" type="checkbox" class="custom-control-input" id="customControlAutosizing"><label class="custom-control-label" for="customControlAutosizing">Status</label></div>';

                }

            ?>

            <!-- <input value="0" name="estado" type="hidden"> -->
           
            <br>

            <button id="botao" type="submit" title="Salvar" class="btn btn-outline-success">Salvar</button>

        </form>

    </div>

</body>
</html>