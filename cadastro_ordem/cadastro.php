<?php
    session_start();
    include('verifica_login.php');
    include('../conexao.php');
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

        <script>

            // let nome = prompt("Digite aqui seu nome");

            // console.log(`O nome digitado foi ${nome}`);

            // alert(`Olá! Seja bem vindo, ${nome}!!!`);

            let entrada = prompt("Digite um número:");

            if(entrada && entrada.trim()){
            let numero = Number(entrada);
            if(numero > 15){
                console.log("Número maior que quinze.");
            }
            else if(numero < 15){
                console.log("Número menor que quinze.");
            }
            else if(numero === 15){
                console.log("Número igual a quinze.");
            }
            else{
                console.log("Valor inválido.");
            }
            }
            else{
            console.log("Nenhum valor digitado.");
            }

        </script>

        <?php 

            $consulta = "SELECT * FROM `ordem` ORDER BY `ordem_id` DESC LIMIT 1";
            $script = $conexao->query($consulta);
            $linha = $script -> fetch_array();
            
            if (empty($linha['ordem_id'])){
                $linhaInt = 0;
            } else {
                $linhaInt = $linha['ordem_id'];
            }
            
            $id_ordem = ($linhaInt + 1);
        
        ?>

        <script type="text/javascript">

            function mCPF(cpf){

                if(cpf.value.length == 3){
                    cpf.value = cpf.value + '.'; 
                }

                if(cpf.value.length == 7){
                    cpf.value = cpf.value + '.'; 
                }

                if(cpf.value.length == 11){
                    cpf.value = cpf.value + '-'; 
                }

            }

            jQuery(document).ready(function(){
                jQuery('#buscar').submit(function(){
                    var dados = jQuery( this ).serialize();

                    jQuery.ajax({
                        type: "POST",
                        url: "pesquisar.php",
                        data: dados,
                        success: function( data )
                        {
                            if (data == ""){
                                alert("CPF não encontrado!");
                            } else {
                                document.getElementById("cliente").value = data;
                                document.getElementById("nome").value = data[0];
                            }
                        } 
                    });
                    
                    return false;

                });
            });

        </script>

        <?php

            
        
            $query = "SELECT cliente_id, nome FROM cliente";
                $result = $conexao->query($query);

            while($row = $result->fetch_array()){
                $rows[] = $row;
            } 
            
        ?>
        
    </head>

    <body>

        <div class="container">
            
            <br>

            <div class="header clearfix">
                
                <h4>Ordem de serviço</h4>

                <hr>

                    <a title="Voltar a tela anterior." href="../principal/painel.php"><button class="btn btn-outline-dark">Voltar</button></a>
                
                <hr>

                <div class="jumbotron">

                    <div class="alert alert-info" role="alert">
                        <h6>N° Ordem de Serviço: <?php echo $id_ordem;?></h6>
                    </div>

                    <nav class="navbar navbar-light bg-light">
                        <form method="POST" id="buscar" class="form-inline">
                            <input type="text" onkeypress="mCPF(this)" name="pesquisar" class="form-control" title="Digite o CPF para buscar o cliente" placeholder="CPF" maxlength="14" autocomplete="off" required>
                            <button title="Procurar" class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
                        </form>
                    </nav>

                    <br>

                    <form action="cadastro_ordem.php" method="POST">

                        <label class="label label-default">Cliente:</label>
                        <input id="cliente" name="nome" value="" type="text" placeholder="Nome" class="form-control" autocomplete="off" required>
                        
                        <input id="nome" type="text" name="cod_cliente" style="display:none">

                        <br>

                        <label>Modelo do Veículo:</label>
                        <input title="Preencher o modelo do veículo." maxlength="30" type="text" name="model_veiculo" class="form-control" tabindex="4" placeholder="Carro" autocomplete="off" required>

                        <br>

                        <label>Ano do Veículo:</label>
                        <input title="Preencher o ano do veículo." maxlength="4" type="text" name="ano_veiculo" class="form-control" tabindex="5" placeholder="Ano" autocomplete="off" required>

                        <br>

                        <label class="label label-default">Tipo de óleo:</label>
                        <select title="Selecionar o tipo do óleo do veículo." maxlength="5" id="oleo" class="form-control" tabindex="6" name="oleo" autocomplete="off" required>

                            <option value="0W20">0W20</option>
                            <option value="5W30">5W30</option>
                            <option value="0W40">0W40</option>
                            <option value="5W40">5W40</option>
                            <option value="10W40">10W40</option>
                            <option value="15W40">15W40</option>
                            <option value="20W40">20W40</option>
                            <option value="20W50">20W50</option>

                        </select>

                        <br>

                        <label>Quilômetragem do Veículo (Km):</label>
                        <input title="Preencher a quilômetragem do veículo." maxlength="30" type="text" name="kmveiculo" tabindex="7" class="form-control" placeholder="10000" autocomplete="off" required>

                        <br>

                        <label>Observação:</label>
                        <textarea title="Adicionar alguma observação." maxlength="300" id="subject" name="observacao" tabindex="11" class="form-control" placeholder="Observação..." style="height:200px"></textarea autocomplete="off">

                        <br>

                        <button title="Criar OS." type="submit" tabindex="12" class="btn btn-outline-success">Cadastrar</button>

                    </div>

                </form>

            </div>

        </div>
        
    </body>

</html>