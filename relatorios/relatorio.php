    <?php

        // Inicia a sessão de login
        session_start();

        // Inclui verificação de login.
        include('verifica_login.php');

        // Inclui conexão com o banco.
        include('../conexao.php');

        // Pega a data atual e atribui a variável.
        $hoje = date('d-m-Y');

        // Select para trazer os dados.
        $consulta = "SELECT * FROM `ordem` ORDER BY `ordem_id` ASC";
        $script2 = mysqli_query($conexao, $consulta) or die("Connection failed: " . mysqli_connect_error());

    ?>

    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="shortcut icon" href="../Imagens/oleo_preto.png">
        <title>Relatorio de Ordens de Serviço</title>

        <!-- framework Chart.js -->
        <script src="../js/chartjs.js"></script>

        <!-- Definição de variáveis -->
        <script>

            var valido = 0;
            var vencendo = 0;
            var vencido = 0;

        </script>

    </head>
    <body>

    <div class="container">

        <br>

        <h4>Ordens de Serviço</h4>

        <hr>

        <a title="Voltar a tela anterior" href="../principal/painel.php"><button class="btn btn-outline-dark">Voltar</button></a>

        <hr>

        <p># Lista de OS</p>
        
        <div class="row marketing">

            <div class="col-lg-12">

                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th># OS</th>
                            <th>Nome do Cliente</th>
                            <th>Data Troca</th>
                            <th>Próxima Data Troca</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>

                    <?php
                        while($dado = $script2 -> fetch_array()){
                    ?>

                        <tbody>

                            <tr>
                                <td><?php echo $dado ['ordem_id']; ?></td>

                                <td>
                                    <?php 
                                        $cliente = $dado ['cliente_id'];
                                        $consult = "SELECT * FROM `cliente` WHERE `cliente_id` = '$cliente'";
                                        $query = mysqli_query($conexao, $consult) or die("#Erro ao carregar registro.");
                                        while($v = $query -> fetch_array()){
                                            echo $v['nome'];
                                        }
                                    ?>
                                </td>

                                <td><?php echo $dado ['data_troca']; ?><?php $dt = date("d-m-Y", strtotime($dado ['data_troca'])); ?></td>        
                                <td><?php echo $dado ['prox_data_troca']; ?><?php $pdt = date("d-m-Y", strtotime($dado ['prox_data_troca'])); ?></td>

                                <?php
                                    $hoje = date("d-m-Y");
                                    $dataFinal = (strtotime($pdt) - strtotime($hoje));
                                    (int)$dias = floor($dataFinal / (60 * 60 * 24));         
                                ?>
                                <td>
                                    <?php
                                        
                                        $abs_dias = abs($dias);

                                        if($dias <= 0){
                                            
                                            $status ="está vencido há $abs_dias dias";
                                            echo '<span class="badge badge-danger">Vencido</span>';
                                            echo " (Vencido há $abs_dias dias)";
                                            echo '<script> var vencido = (vencido + 1); </script>';

                                        }elseif($dias <= 15){
                                            
                                            $status ="falta $abs_dias dias para seu óleo vencer";
                                            echo '<span class="badge badge-warning">Perto de vencer</span>';
                                            echo " (Faltam $abs_dias dias para vencer)";
                                            echo '<script> var vencendo = (vencendo + 1); </script>';
                                            
                                        }elseif($dias >= 16){

                                            $status ="falta $abs_dias dias para seu óleo vencer";
                                            echo '<span class="badge badge-success">Dentro da válidade</span>';
                                            echo " (Faltam $abs_dias dias para vencer)";
                                            echo '<script> var valido = (valido + 1); </script>';

                                        }
    
                                    ?>
                                </td>
                                <td>
                                    <a href="editar_cadastro.php?codigo=<?php echo $dado['ordem_id'];?>"><button title="Editar OS." class="btn btn-outline-warning">OS</button></a>
                                    <a href="../cadastro_email/relatorio_enviar.php?codigo=<?php echo $dado["ordem_id"];?>&val=<?php echo $status;?>"><button id="dvConteudo" title="Notificar por e-mail." class="btn btn-outline-dark">E-mail</button></a>
                                </td>                    
                                
                            </tr>

                        </tbody>
                    
                    <?php
                        }
                    ?>

                </table>

            </div>

        </div>

        <p># Gráfico</p>

        <hr>

        <div class="row justify-content-md-center">

        <div class="col-md-12 mb-3">

            <canvas id="myChart"></canvas>
                            
            <script>

                var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Óleos dentro da validade', 'Óleos perto de vencer', 'Óleos vencidos'],
                            datasets: [{

                                label: 'Gráfico do Relatório',
                                data: [valido, vencendo, vencido],
                                backgroundColor: [

                                    'rgba(40, 167, 69, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 99, 132, 0.2)'

                                ],
                                borderColor: [
                                    
                                    'rgba(40, 167, 69, 1)',
                                    'rgba(255, 159, 64, 1)',
                                    'rgba(255, 99, 132, 1)'
                                    
                                ],
                                borderWidth: 1

                            }]
                            
                            },

                                options: {
                                    scales: {
                                    yAxes: [{
                                        ticks: {
                                    beginAtZero: true
                                }

                            }]
                        }
                    }
                });
                                
            </script>
        
        </div>

        </div>

    </div>

    <br>

    </body>
    </html>