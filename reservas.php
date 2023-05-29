<?php require_once('conexao/conexao.php'); ?>

<!DOCTYPE html> 
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="pergola-icon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Restaurante Pergola </title>
    </head>
    <body> 

        <!---- topo ----> 
        <?php  require_once('conteudo/topo.php'); ?>
        <!---- Banner ---->
        <?php require_once('conteudo/banner.php'); ?>
        
        <div class="container">
            <section class="reserva-agenda">
        
                <article>
                    <img src="img/Reserva/reserva-agenda.jpg">
                </article>

                <article>
                    <h2> Formulário de Reserva </h2>
                    <form action="" method="post" class="form" autocomplete="off"> 
                        <div>
                            <input type="text" placeholder="Nome: " required name="nome">
                        </div>
            
                        <div>
                            <input type="text" placeholder="Telefone: " required name="Tel">
                        </div>
                        
                        <div>
                            <label for="party">Selecione data e horário que deseja reservar</label>
                            <input
                            id=""
                            type="datetime-local"
                            name="databr"
                            value="2023-01-01T00:00" />
                        </div>

                        <div>
				            <textarea name="ps" placeholder="Anote aqui sua observação caso necessite de algo específico para sua reserva" cols="10" rows="10" >   </textarea>
		                </div>

                        <div>
                            <input type="submit" name="submit" value="Enviar">
                        </div>
                        
                    </form>
                </article>	
	        </section>
            <?php 

                date_default_timezone_set('America/Sao_Paulo');

                if(isset($_POST['submit'])){

                    # Variáveis que irão encapsular os valores dos inputs #
                    $Nome= $_POST['nome'];
                    $Tel= $_POST['Tel'];
                    $Horario= $_POST['databr'];
                    $obs= $_POST['ps'];
                    
                    # Aqui será realizado o insert de dados no banco de dados, referente a reserva do cliente, enviando os valores que foram encapsulados acima #
                    $sql = "INSERT INTO reserva(idReserva,Nome,Telefone,Horario,Obs) VALUES (NULL,'$Nome', '$Tel', '$Horario', '$obs')";

                    if(mysqli_query($conn, $sql)){
                        echo "<p class='mensagem-reserva'> Mesa reservada com sucesso! </p>";
                    } else {
                        echo "error: " .$sql . "" . mysqli_error($conn);
                    }
                    mysqli_close($conn);

                    
                }

            ?>
        </div>
        <p class="mensagem-reserva"> </p>

        <hr>
        <!---- Rodapé ---->
        <?php require_once('conteudo/rodape.php'); ?>
    </body>
</html>