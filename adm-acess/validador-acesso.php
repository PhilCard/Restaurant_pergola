<?php

    session_start();
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != "SIM"){ # Aqui será verificado se usuário está autenticado, se tentar acessar diretamente as páginas administrativas antes de logar, será apresentado o erro no corpo de url que está logo abaixo, o header irá redirecionar de volta a página de login #
    
    header('Location: adm-acess/adm-login.php?login=erro2');
    }

?>