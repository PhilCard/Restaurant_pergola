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
                    <div class="form-container">
                        <h2>Fale Conosco</h2>
                        <form action="" method="post" class="form" autocomplete="off">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
                            </div>

                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000">
                            </div>

                            
                            <label for="agendamento">Escolha a data e hora</label>
                            <input type="datetime-local" id="agendamento" name="agendamento"
                                min="2025-01-01T10:00"
                                max="2025-12-31T22:00"
                                step="900">

                            <div class="form-group">
                                <label for="observacao">Observação</label>
                                <textarea id="observacao" name="observacao" placeholder="Escreva aqui sua observação..."></textarea>
                            </div>

                            <button type="submit" name="submit" class="btn-enviar">Enviar</button>
                        </form>
                    </div>
                </article>	
	        </section>
            <?php 

                //date_default_timezone_set('America/Sao_Paulo');

                if(isset($_POST['submit'])){

                    $nome = $_POST['nome'];
                    $telefone = $_POST['telefone'];
                    $data = $_POST['agendamento'];
                    $observacao = $_POST['observacao'];

                    // Monta a mensagem com quebra de linha (%0A)
                    $dataFormatada = date('d/m/Y H:i', strtotime($data));

                    // Mensagem sem emojis para evitar erro de codificação
                    $mensagem  = "Nova reserva recebida:\n";
                    $mensagem .= "Nome: $nome\n";
                    $mensagem .= "Telefone: $telefone\n";
                    $mensagem .= "Data da reserva: $dataFormatada\n";
                    $mensagem .= "Observação: $observacao";

                    // Codifica para URL
                    $mensagem = rawurlencode($mensagem);

                    $numero = "5511952283221"; // Altere para o número real
                    $link = "https://wa.me/$numero?text=$mensagem";

                    header("Location: $link");
                    exit;
                }

            ?>
        </div>
        <p class="mensagem-reserva"> </p>

        <hr>
        <!---- Rodapé ---->
        <?php require_once('conteudo/rodape.php'); ?>
    </body>
</html>