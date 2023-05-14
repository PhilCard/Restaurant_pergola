<?php require_once('conexao/conexao.php'); ?>
<?php require_once('adm-acess/validador-acesso.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Adm Pergola</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="pergola-icon.ico">
    </head>
    <body>
        <div class="container"> 

            <!---- Navegação vertical ---->
            <?php require_once('conteudo/nav-consulta.php'); ?>

            <section class="card-box"> 
                <h2> Home </h2> 
                <div class="card-body"> 
                    <div class="conteudo">
                        <div class="home-icons"> 
                            <img src="img/icons/icon-reserva.png">
                            <img src="img/icons/icon-mesa.png">
                        </div>
                        <div class="links-nav"> 
                            <a href="consulta.php">Reservas</a>
                            <a href="mesas.php">Mesas</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>