<?php
session_start();
include_once '../Login/ProtectPaginas.php';
protect();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro Médico</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/CadastraAtualiza.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="estilo.css" rel="stylesheet">

    </head>
    <body>
        <header id="topo">
            <input type="checkbox" id="bt_menu">
            <label for="bt_menu">&#9776;</label>
    <nav class="menu">
        <ul>
            <li><a href="../Telas/Index.php">Inicio</a></li>
            <li><a href="../Login/Sair.php">Cadastro</a>
                <ul>
                    <li><a href="../Telas/TelaCadastroUsuario.php">Usuário</a></li>
                    <li><a href="../Telas/TelaCadastroMedico.php">Médico</a></li>
                    <li><a href="../Telas/TelaCadastroPaciente.php">Paciente</a></li>
                </ul>
            </li>
            <li><a href="#">Sair</a></li>
        </ul>
    </nav>
    </header>
        <div class="container mid">


        <div class="row">
            <div class="col-sm-12">
                <h2 class="titulo-h2">Cadastro Médico</h2>
                
            <form action="../Medico/RegistraMedico.php" method="POST">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome">
                    </div>

                    <div class="form-group col-sm-3">
                        <label for="DataNasc">Data de Nascimento</label>
                        <input type="text" class="form-control" name="dtanascimento" id="DataNasc">
                    </div>

                     <div class="form-group col-sm-3">
                        <label for="conselhoId" >Conselho:</label>
                        <input type= "text" class="form-control" name= "conselho" id="conselhoId">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-5">
                        <label for="telefoneId">Telefone:</label>
                        <input type="text" class="form-control" name="telefone" id="telefoneId">
                    </div>

                    <div class="form-group col-sm-7">
                        <label for="emailId">Email:</label>
                        <input type="text" class="form-control" name="email" id="emailId">
                    </div>
                </div>

                <div class="row"> 
                    <div class="form-group col-sm-4">
                        <label for="tipoDeAtendimento">Tipo de Atendimento:</label>
                        <input type="text" class="form-control" name="tipodeatendimento" id="tipoDeAtendimento">
                        
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="funcaoId">Função:</label>
                        <input type="text" class="form-control" name="funcao" id="funcaoId">
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="especialidadeId">Especialidade:</label>
                        <input type="text" class="form-control" name="especialidade" id="especialidadeId" >
                    </div>
                </div>

                <button type="submit" class="bt-salvar">Salvar</button>
                <button type="button" class="bt-buscar"><a href="../Medico/TelaMedicoTable">Buscar</a></button>
            </form>
                    
            </div>
        </div>
</div>

<footer>
    <h1>Copyright &copy 2018 - Fábrica de Software</h1>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/jquery.mask.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      $('#DataNasc').mask('00/00/0000');
      $('#telefoneId').mask('(00) 00000-0000');
    });
    </script>
    </body>
</html>



