<?php

    require_once('../conexao/conexao.php');
    # Para o funcinamento do redirecionamento do header hospedado no 000webhost foi necessário ativar ob_start #
    ob_start();

    session_start();

    # Variável de verificação de autenticação #
    $usuario_autenticado = false;

    if(isset($_POST['entrar'])){

        # Variáveis que irão incapsular o login e senha #
        $login = $_POST["Login"];
        $pass = $_POST["Senha"];

        # Foi realizado um select para comparar com o banco de dados os valores informados no login e senha, os mesmos encapsulados dentro das variáveis #
        $sql = "SELECT Login , Senha FROM funcionario WHERE Login = '$login' 
        AND Senha = '$pass'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){

            while ($row = $result->fetch_assoc()){

                if($row["Login"] == $login && $row["Senha"] == $pass){ # Após a validação de longin e senha, a variável de autenticação passará a ser true #

                    $usuario_autenticado = true;

                } if($usuario_autenticado){ # Após autenticação do usuário estar correta, será redirecionado a página home administrativa #
                    echo "Usuário Autenticado";
                    $_SESSION['autenticado'] = 'SIM';
                    header('Location: ../home.php');
                    exit;
                }
                
            }
        } else { # Caso login e senha não esteja de acordo com o banco de dados, irá retornar o erro no corpo da url que se encontra logo abaixo no header # 
            $_SESSION['autenticado'] = 'NÃO';
            header('Location: adm-login.php?login=erro');
        }
        $conn->close();
    } 
    # Para o funcinamento do redirecionamento do header hospedado no 000webhost foi necessário fechar com ob_end_flush #
    ob_end_flush(); 


?>