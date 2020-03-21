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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <title>Sobre</title>

</head>

<body>

<div class="container">

  <br>
  
  <br>

    <a href="http://www.fateccarapicuiba.edu.br/" target="_blank">
      <img width="137" height="68" src="../Imagens/fatec.png" width="32" height="32" title="Fatec Carapicuíba">
      FACULDADE DE TECNOLOGIA DE CARAPICUÍBA
    </a>

    <br>

    <br>

    Informação da versão: 1.0
    <h4>Agendamento de troca de óleo</h4>
       
    <hr>

      <a title="Voltar a tela anterior" href="painel.php"><button class="btn btn-outline-dark">Voltar</button></a>

    <hr>    

    Ferramentas Utilizadas no Desenvolvimento do Sistema

    <div class="alert alert-info" role="alert">
    
      <a href="https://getbootstrap.com/" target="_blank">
        <img src="../Imagens/bootstrap.png" alt="" width="32" height="32" title="Bootstrap">
        Bootstrap - (Estilo da página) v 4.4.1
      </a>
      <br>
       
      <br>
        <a href="https://www.w3schools.com/html/html5_intro.asp" target="_blank">
          <img src="../Imagens/html5.png" alt="" width="32" height="32" title="HTML5">
          HTML5 - (Corpo da página) v 5.2
        </a>
      <br>
      <br>
        <a href="https://www.php.net/" target="_blank">
          <img src="../Imagens/php.png" alt="" width="32" height="32" title="PHP7">
          PHP7 - (Programação back-end) v 7.4.2
        </a>
      <br>
      <br>
        <a href="https://www.w3schools.com/js/" target="_blank">
          <img src="../Imagens/javascript.png" alt="" width="32" height="32" title="JavaScript">
          JavaScript - (Validações) v 1.6
        </a>
      <br>
      <br>
        <a href="https://www.phpmyadmin.net/" target="_blank">
          <img src="../Imagens/postgreesql.png" alt="" width="32" height="32" title="Postgreesql">
          PhpMyAdmin - (Banco de dados) v 4.7.7
        </a>
      <br>
      <br>
        <a href="https://www.apache.org/" target="_blank">
          <img src="../Imagens/apache.png" alt="" width="32" height="32" title="Apache">
          Apache (Servidor Win64) v 2.4.4.1
        </a>
      <br>
      <br>
        <a href="https://www.chartjs.org/" target="_blank">
          <img src="../Imagens/chartjs.svg" alt="" width="32" height="32" title="Chart.js">
          Chart.js (Dashboard) v 2.5.0
        </a>
      <br>

  </div>

  <br>
  
  Informações do Projeto

  <br>

  <div id="accordion">

    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span class="badge badge-pill badge-dark">#Desenvolvimento</span>
          </button>
        </h5>
      </div>
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <span class="badge badge-pill badge-dark">#Documentação</span>
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" id="headingThree">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <span class="badge badge-pill badge-dark">#Relatórios</span>
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>

  </div>

  <br>
  
  <div class="alert alert-info" role="alert">

      # Sistema e Sub-Sistemas
    <br>
      # Modelo Entidade Relacionamento
    <br>
      # Banco de dados
    <br>
      # Dicionário de Dados
   
  </div>

  # Sistema Multiplataforma

  <hr>

    <div class="row justify-content-md-center">
        
      <img width="252" height="252" src="../Imagens/desenvolvimento-web.gif" class="img-fluid" alt="Multiplataforma">
        
    </div>

  <hr>

</div>

</body>
</html>