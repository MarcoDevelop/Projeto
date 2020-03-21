<?php

    session_start();
    include('verifica_login.php');  
    include('../conexao.php');
    $consulta = "SELECT * FROM `cliente` ORDER BY `cliente_id` ASC";
    $con = mysqli_query($conexao, $consulta) or die("#Erro ao acessar registros!");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../Imagens/oleo_preto.png">

    <script type="text/javascript">

        function mascara(telefone){ 

            if(telefone.value.length == 0){
                telefone.value = '+55' + telefone.value; 
            }
        
        }

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

    </script>

    <title>Cadastro do cliente</title>
</head>
<body>

    <br>

    <div class="container">

        <h4>Cadastro do cliente</h4>

        <hr>

        <a title="Voltar a tela anterior." href="../principal/painel.php"><button class="btn btn-outline-dark">Voltar</button></a>

        <hr>

        <div class="jumbotron">
            
            <form action="cadastro_cliente.php" method="POST">

                <div class="form-row">
                    <div class="col">
                        <label>Nome do cliente:</label>
                        <input type="text" name="nome_cliente" class="form-control" title="Preencher com o nome." tabindex="1" autofocus="1" maxlength="60" placeholder="Nome" autocomplete="off" required>
                    </div>
                    <div class="col">
                        <label>CPF:</label>
                        <input type="text" onkeypress="mCPF(this)" name="cpf" class="form-control" title="Preencher com o CPF." tabindex="2" placeholder="000.000.000-00" maxlength="14" style='text-transform:lowercase' autocomplete="off">
                    </div>
                </div>

                <br>
                
                <div class="form-row" >
                    <div class="col">
                        <label>E-mail:</label>
                        <input type="email" name="email_cliente" class="form-control" title="Preencher com o e-mail." tabindex="2" placeholder="exemplo@dominio.com" maxlength="60" style='text-transform:lowercase' autocomplete="off" required>
                    </div>
                    <div class="col">
                        <label>Numero de telefone:</label>
                        <input onkeypress="mascara(this)" type="tel" name="telefone_cliente" class="form-control" title="Preencher com o DD depois o numero." tabindex="3" maxlength="14" placeholder="11999990000" style='text-transform:uppercase' autocomplete="off" required>
                    </div>
                </div>

                <br>

                <button tabindex="4" type="submit" class="btn btn-outline-success">Cadastrar</button>

            </form>

        </div>

        <div class="col-md-0 mb-3">
            <h4>Lista clientes cadastrados</h4>
        </div>

        <br>

        <div class="row marketing">

            <div class="col-lg-12">

                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th># Código</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Status</th>
                            <th>Modificar</th>
                        </tr>
                    </thead>

                    <?php
                        while($dado = $con -> fetch_array()){
                    ?>

                    <tbody>

                        <tr>
                            <td><?php echo $dado ['cliente_id']; ?></td>
                            <td><?php echo $dado ['nome']; ?></td>
                            <td><?php echo $dado ['cpf']; ?></td> 
                            <td><?php echo $dado ['email']; ?></td>
                            <td><?php echo $dado ['telefone']; ?></td>
                            <td>
                            
                                <?php

                                    $dado ['status'];
                                   
                                    if($dado ['status'] == 1){

                                        echo '<span class="badge badge-success">Ativo</span>';

                                    }else{

                                        echo '<span class="badge badge-danger">Inativo</span>';

                                    }
                                
                                ?>
                            
                            </td>
                            <td>
                            
                                <a href="alterar.php?codigo=<?php echo $dado['cliente_id'];?>"><button tabindex="5" class="btn btn-outline-warning">Editar</button></a>
                            
                            </td>
                        </tr>

                    </tbody>
                    
                    <?php
                        }
                    ?>

                </table>
            
            </div>
            
        </div>

        <br>

    </div>


</body>
</html>