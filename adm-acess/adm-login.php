<?php require_once('../conexao/conexao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head> 
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="icon" type="image/x-icon" href="../pergola-icon.ico">
        <title> Adm Login </title>
    </head> 

    <body class="ADM"> 
        
        <div class="container"> 

            <div class="box-login"> 
                <h2> LOGIN </h2>

                <form action="valida-login.php" method="POST">
                        
                    <div>
                        <input type="text" placeholder="Login : " name="Login">
                    </div>
                        
                    <div>
                        <input type="password" placeholder="Senha : " name="Senha">
                    </div>

                    <?php
                        # Nesse trecho utilizei o método get para pegar o erro de login, caso a senha esteja incorreta, irá apresentar 'erro' no corpo da url e ao mesmo tempo apresentará uma mensagem ao usuário indicando senha ou usuário inválido # 
                        if (isset($_GET['login']) && $_GET['login'] == 'erro'){
                            echo "<div class='text-danger'> login ou senha inválidos </div>";

                        } elseif(isset($_GET['login']) && $_GET['login'] == 'erro2'){ # Utilizando também o GET, caso seja feita a tentativa de acessar as páginas adm sem estar logado antes, irá apresentar o erro 'erro2' e ao mesmo tempo apresentará a mensagem para logar antes de tentar acessar as páginas #
                            echo "<div class='text-danger'> faça login antes de acessar as páginas administrativas </div>";
                        }
                    ?>

                    <div>
                        <input type="submit" name="entrar" value="Entrar">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>