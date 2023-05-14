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
                        <form action="" method="post" autocomplete="off">
                            <input type="text" name="busca" placeholder="Search..." autocomplete="off">
                            <button name="consultar" value="submit">Consultar Reserva</button>
                        </form>
                            
                        <?php 
                            
                            if(isset($_POST['consultar'])){

                                # Variável que irá encapsular a busca #
                                $consulta = $_POST['busca'];

                                # Realizando o select no banco de dados com o parâmetro where, onde poderei encontrar o nome consultado na barra de pesquisa [busca] # 
                                $sql = "SELECT * FROM reserva WHERE Nome = '" . $consulta . "'";
                                $result = $conn->query($sql);
                                
                                # Utilizando a variável result, ela irá retornar os registros do banco de dados #
                                if ($result->num_rows > 0){

                                    while ($row = $result->fetch_assoc()){

                                        echo "<div class='box-result'> <h3> Nome : " . $row["Nome"]."</h3>" . "<h3> Telefone : " . $row["Telefone"]. "</h3>" . "<h3> Horário: " . $row["Horario"] . "</h3>" . "<p> Obs : " . $row["Obs"] . "</p> </div>"; 
                                    }
                                   } else { # Caso não haja nenhum nome no banco de dados que bate com a consulta, irá retornar o erro que não existe nenhuma reserva nesse nome # 
                                       echo "<div class='alert'> <h2> RESERVA NÃO ENCONTRADA! <br> Por favor, verifique se o nome foi digitado corretamente </h2> <br> <img src='img/alert/alert.png'> </div>";
                               
                                   }
                               $conn->close();
                               

                            }
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>