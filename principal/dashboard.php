<?php

    include('../conexao.php');

    for ($i = 1; $i < 13; $i++) {
        $query = "SELECT COUNT(*) FROM `ordem` WHERE SUBSTRING(data_troca, 5, 2) = $i";
        $result = $conexao->query($query);
        $row = $result->fetch_array();
        $arrayVar[$i] = $row[0];
    }

    // Variáveis indice 1
    $var1php = $arrayVar[1];      
    $var2php = $arrayVar[2];
    $var3php = $arrayVar[3];
    $var4php = $arrayVar[4];
    $var5php = $arrayVar[5];
    $var6php = $arrayVar[6];
    $var7php = $arrayVar[7];
    $var8php = $arrayVar[8];
    $var9php = $arrayVar[9];
    $var10php = $arrayVar[10];
    $var11php = $arrayVar[11];
    $var12php = $arrayVar[12];

    // Variáveis indice 2
    $var20php = 2;      
    $var21php = 0;
    $var22php = 5;
    $var23php = 0;
    $var24php = 10;
    $var25php = 5;
    $var26php = 8;
    $var27php = 3;
    $var28php = 15;
    $var29php = 0;
    $var30php = 0;
    $var31php = 6;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <script src="../js/jquery.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../Imagens/oleo_preto.png">
    <!-- Bootstrap -->

    <!-- framework Chart.js -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> -->
    <script src="../js/chartjs.js"></script>
    <!-- Chart.js -->

    <!-- Variáveis -->
    <script>

        var v1 = "<?php echo $var1php;?>"; // Jan
        var v2 = "<?php echo $var2php;?>"; // Fev
        var v3 = "<?php echo $var3php;?>"; // Mar
        var v4 = "<?php echo $var4php;?>"; // Abr
        var v5 = "<?php echo $var5php;?>"; // Mai
        var v6 = "<?php echo $var6php;?>"; // Jun
        var v7 = "<?php echo $var7php;?>"; // Jul
        var v8 = "<?php echo $var8php;?>"; // Ago
        var v9 = "<?php echo $var9php;?>"; // Set
        var v10 = "<?php echo $var10php;?>"; // Out
        var v11 = "<?php echo $var11php;?>"; // Nov
        var v12 = "<?php echo $var12php;?>"; // Dez

        // Variáveis indice 2
        var v20 = "<?php echo $var20php;?>"; // Jan
        var v21 = "<?php echo $var21php;?>"; // Fev
        var v22 = "<?php echo $var22php;?>"; // Mar
        var v23 = "<?php echo $var23php;?>"; // Abr
        var v24 = "<?php echo $var24php;?>"; // Mai
        var v25 = "<?php echo $var25php;?>"; // Jun
        var v26 = "<?php echo $var26php;?>"; // Jul
        var v27 = "<?php echo $var27php;?>"; // Ago
        var v28 = "<?php echo $var28php;?>"; // Set
        var v29 = "<?php echo $var29php;?>"; // Out
        var v30 = "<?php echo $var30php;?>"; // Nov
        var v31 = "<?php echo $var31php;?>"; // Dez

    </script>
    <!-- Variáveis -->

    <!-- Aula -->
    <!-- https://www.youtube.com/watch?v=l0K95at8BVg
    https://www.chartjs.org/ -->
    <!-- Aula -->

    <title>Dashboard</title>
</head>
<body>

<br>

<div class="container">

    <h4>Dashboard</h4>

    <hr>

    <a title="Voltar a tela anterior" href="painel.php"><button class="btn btn-outline-dark">Voltar</button></a>

    <a title="Atualizar dados do gráfico" href="dashboard.php"><button class="btn btn-outline-info">Atualizar</button></a>

    <hr>

    <canvas class="line-chart"></canvas>

    <script> 
        
        var ctx = document.getElementsByClassName("line-chart");

        // Type, Data e options
        var chartGraph = new Chart(ctx, {
            
            // Tipo do grafico
            type: 'line',
            
            data:{
               // textos de baixo do grafico
                labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
               
                datasets: [
                    
                    {
                        // Texto da legenda
                        label: "Índice de Abertura de OS 2020",
                        // Dados para aparecer no grafico. (Mudar para variáveis)
                        data: [v1,v2,v3,v4,v5,v6,v7,v8,v9,v10,v11,v12],
                        // Largura da linha
                        borderWidth: 1,
                        // Cor da linha
                        borderColor: 'rgba(77,166,253,0.85)',
                        // Fundo transparente
                        backgroundColor: 'rgba(77,166,253,0.2'
                        // backgroundColor: 'transparent'
                    },

                    // {
                    //     // Texto da legenda
                    //     label: "Índice de Óleos Vencidos",
                    //     // Dados para aparecer no grafico. (Mudar para variáveis)
                    //     data: [v20,v21,v22,v23,v24,v25,v26,v27,v28,v29,v30,v31],
                    //     // Largura da linha
                    //     borderWidth: 1,
                    //     // Cor da linha
                    //     // borderColor: 'rgba(255,0,0,0.85)',
                    //     borderColor: 'rgba(6,204,6,0.85)',
                    //     // Fundo transparente
                    //     backgroundColor: 'transparent'
                    // },
                
                ]

            },
            
            options: {
                title: {
                    display: true,
                    fontSizze: 20,
                    text: "Estatística Anual"
                },
                labels: {
                    fontStyle:  "bold"
                }
            }
        
        });

    </script>

</div>
  
</body>
</html>