<?php

    // Inicia a sessão de login
    session_start();

    // Inclui verificação de login.
    include('verifica_login.php');

    // Inclui conexão com o banco.
    include('../conexao.php');

    // Recebe o valor via post do formulário.
    $ordem_cod = $_GET["codigo"];
    
    // 1° Select Array
    $consult_2 = "SELECT * FROM `ordem` WHERE ordem_id = '$ordem_cod'";
    $query_2 = mysqli_query($conexao, $consult_2) or die("Connection failed: " . mysqli_connect_error());
    $result_2 = $query_2 -> fetch_array();

    // 3° Select Array
    $client = $result_2['cliente_id'];
    $consult = "SELECT * FROM `cliente` WHERE cliente_id = '$client'";
    $query = mysqli_query($conexao, $consult) or die("Connection failed: " . mysqli_connect_error());
    $result = $query -> fetch_array();

    // 2° Select Array
    $consult_3 = "SELECT * FROM `veiculo` WHERE ordem_id = '$ordem_cod'";
    $query_3 = mysqli_query($conexao, $consult_3) or die("Connection failed: " . mysqli_connect_error());
    $result_3 = $query_3 -> fetch_array();

?>

<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="../Imagens/oleo_preto.png">
        <title>Ordem de serviço</title>
        
    </head>

    <body background-image = "url(./Imagens/oleo_preto.png)">

        <div class="container">

            <div class="header clearfix">

                <br>
           
                <h4>Ordem de serviço</p></h4>

                <hr>

                <a href="../relatorios/relatorio.php"><button class="btn btn-secondary">Voltar</button></a>
                
                <hr>

                <div class="jumbotron">

                    <form action="" method="#">
                        
                        <label>Nome do cliente:</label>
                        <input value ="<?php echo $result['nome']; ?>" type="text" name="" class="form-control" placeholder="" autocomplete="off">

                        <br>

                        <label>E-mail:</label>
                        <input value ="<?php echo $result['email']; ?>" type="text" name="" class="form-control" placeholder="" style='text-transform:lowercase' autocomplete="off">

                        <br>

                        <label>Numero de telefone:</label>
                        <input value ="<?php echo $result['telefone']; ?>" type="tel" name="" class="form-control" placeholder="" autocomplete="off">

                        <br>

                        <label>Data da troca:</label>
                        <input value ="<?php echo $result_2['data_troca']; ?>" type="text" name="" class="form-control" placeholder="" autocomplete="off">

                        <br>

                        <label>Data da proxima troca:</label>
                        <input value ="<?php echo $result_2['prox_data_troca']; ?>" type="text" name="" class="form-control" placeholder="" autocomplete="off">

                        <br>

                        <label>Modelo do Veículo:</label>
                        <input value ="<?php echo $result_3['modelo']; ?>" type="text" name="" class="form-control" placeholder="" autocomplete="off">

                        <br>

                        <label>Ano do Veículo:</label>
                        <input value ="<?php echo $result_3['ano']; ?>" type="text" name="" class="form-control" placeholder="" autocomplete="off">

                        <br>

                        <label class="label label-default">Tipo de óleo:</label>
                        <input value ="<?php echo $result_2['oleo']; ?>" type="text" name="" class="form-control" placeholder="" autocomplete="off">

                        <br>

                        <label>Quilômetragem do Veículo (Km):</label>
                        <input value ="<?php echo $result_3['quilometragem']; ?>" type="text" name="" class="form-control" placeholder="" autocomplete="off">

                        <br>

                        <label>Observação:</label>
                        <textarea name="" class="form-control" placeholder="" style="height:200px"><?php echo $result_2['observacao']; ?></textarea autocomplete="off">
                        
                        <br>

                    </div>

                </form>

                <button onclick="javascript:window.print();" class="btn btn-secondary">Imprimir</button>

                <br>
                
                <br>

            </div>

        </div>

    </body>

</html>