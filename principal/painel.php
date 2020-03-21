<?php
    session_start();
    include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../Imagens/oleo_preto.png">
    <meta http-equiv="refresh" content="5; painel.php">
    <title>Agendamento Troca de Óleo</title>
</head>

<body>

    <div class="container">

        <br>

        <div class="row justify-content-md-center">
            
            <h2><img src="../Imagens/oleo_vermelho.png"> Agendamento Troca de Oléo</h2>
            
        </div>

        <hr>

        <div class="d-flex justify-content-around">
        
            <a title="Cadastro Cliente" href="../cadastro_cliente/cliente.php"><button class="btn btn-outline-dark">Cadastro Cliente</button></a>

            <a title="Nova Ordem de Serviço" href="../cadastro_ordem/cadastro.php"><button class="btn btn-outline-dark">Nova Ordem de Serviço</button></a>

            <a title="Lista Ordens de Serviço" href="../relatorios/relatorio.php"><button class="btn btn-outline-dark">Lista Ordens de Serviço</button></a>

            <a title="Cadastro de Usuários" href="../cadastro_user/usuario.php"><button class="btn btn-outline-dark">Cadastro de Usuários</button></a>

            <a title="Dashboard" href="dashboard.php"><button class="btn btn-outline-dark">Dashboard</button></a>
            
            <a title="Sobre" href="sobre.php"><button class="btn btn-outline-dark">Sobre</button></a>
        
        </div>

        <hr>
               
        <div class="alert alert-info" role="alert">

            <p style="text-transform:uppercase"># Olá, <?php echo $_SESSION['usuario'];?>. <a style="text-decoration:none" title="Sair do sistema." href="./logout.php" class="alert-link">Sign out</a></p>
            <span class="badge badge-danger"><?php echo date("d-m-Y");?></span>
            <span class="badge badge-warning"><?php echo date("H:i");?></span>
        
        </div>

        <hr>

        <img src="../Imagens/troca-de-oleo.jpg" class="img-fluid" alt="Responsive image" alt="Troca de Óleo">

        <hr>

        <br>

        <div class="row justify-content-md-center"><a href="https://api.whatsapp.com/send?phone=+5511971815817&text=Ola!%20Gostaria%20de%20maiores%20informa%C3%A7%C3%B5es;"><button">© 2020 by Criado por Marco Miranda</button></a></div>

    <br>

</body>

</html>

<!-- https://getbootstrap.com/docs/4.0/examples/ -->


