<?php

    // Conexão com o banco de dados.
    include('cadastro.php');

    // Variáveis recebidas via post do formulário.
    $cliente = $_POST['cod_cliente'];
    $model_veiculo = $_POST['model_veiculo'];
    $ano_veiculo = $_POST['ano_veiculo'];
    $oleo =  $_POST['oleo'];
    $kmveiculo = $_POST['kmveiculo'];
    $observacao = $_POST['observacao'];
    
    // Variável pega a data atual do cadastro da ordem.
    $data = date("d-m-Y");

    // Variável soma mais 12 meses.
    $pro_data = date('d-m-Y', strtotime('+365 days', strtotime($data)));

    // 1° query de Insert no banco de dados.
    $query1 =  "INSERT INTO ordem (data_troca, prox_data_troca, oleo, observacao, cliente_id) VALUES ('$data', '$pro_data', '$oleo', '$observacao', '$cliente');";

    // 2° query de Insert no banco de dados.
    $query2 =  "INSERT INTO veiculo (modelo, ano, quilometragem, ordem_id, cliente_id) VALUES ('$model_veiculo', '$ano_veiculo', '$kmveiculo', '$id_ordem', '$cliente');";

    // 1° Conexão e execução da query no baco de dados.
    mysqli_query($conexao, $query1) or die("# Erro ao tentar fazer o cadastro! 1");

    // 2° Conexão e execução da query no baco de dados.
    mysqli_query($conexao, $query2) or die("# Erro ao tentar fazer o cadastro! 2");

    // Alerta de cadastro.
    echo "<script>alert('Cadastro realizado com sucesso!');</script>";

    // Volta para tela de cadastro.
    echo '<script>location.href = "cadastro.php";</script>';

?>