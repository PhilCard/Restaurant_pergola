<!DOCTYPE html> 
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="pergola-icon.ico">
        <link rel="stylesheet" type="text/css" href="css/slick.css">
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Restaurante Pergola </title>
    </head>
    <body> 
        
        <!---- topo ----> 
        <?php  require_once('conteudo/topo.php'); ?>
        <!--- Banner --->
        <?php require_once('conteudo/banner.php'); ?>
        <!--- Sobre ---> 
        <?php require_once('conteudo/sobre.php'); ?>
        <!--- Cardapio --->
        <?php require_once('conteudo/cardapio.php'); ?>
        <!--- Horario-reservas --->
        <?php require_once('conteudo/horario.php'); ?>
        <!--- instagram ---> 
        <?php require_once('conteudo/insta.php'); ?>
        <hr>
        <!--- Rodapé --->
        <?php require_once('conteudo/rodape.php'); ?>

        <script src="js/jquery-3.4.1.slim.min.js"> </script>
        <script src="js/slick.js"> </script>
        <script src="js/menu-fixo.js"> </script>
        <script src="js/galery.js"> </script>
    </body>
</html>