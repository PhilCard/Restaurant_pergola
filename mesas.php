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
                    <h2> Mesas </h2> 
                    <div class="card-body"> 
                        <div class="mesas"> 
                            <form action="" method="POST"> 
                            <input type="text" name="busca-mesa" placeholder="Search...">
                                <select name="select-status">
                                    <option value="DISPONÍVEL">DISPONÍVEL </option>
                                    <option value="OCUPADA"> OCUPADA </option>
                                </select>
                                <button name="atualizar-status" value="Consultar"> Atualizar </button>
                            </form>
                        </div>

                        <?php 

                            if(isset($_POST['atualizar-status'])){

                                $status = $_POST['busca-mesa'];
                                $select_status = $_POST['select-status'];

                                switch($_POST['busca-mesa']){

                                    case "Mesa1";

                                        $sql = "update mesa set Mesa1='$select_status' where idMesa='2'";

                                    if ($conn->query($sql) === TRUE) {
                                        echo "<p class='atualizou'> Status atualizado! </p>";
                                    } else {
                                        echo "Error: ".$sql."<br>".$conn->error;
                                    }
                                        break;
                                    
                                    case "Mesa2";

                                        $sql = "update mesa set Mesa2='$select_status' where idMesa='2'";
    
                                    if ($conn->query($sql) === TRUE) {

                                        echo "<p class='atualizou'> Status atualizado! </p>";
                                    } else {
                                        echo "Error: ".$sql."<br>".$conn->error;
                                    }
                                        break;

                                    case "Mesa3";

                                        $sql = "update mesa set Mesa3='$select_status' where idMesa='2'";
        
                                    if ($conn->query($sql) === TRUE) {
    
                                        echo "<p class='atualizou'> Status atualizado! </p>";
                                    } else {
                                        echo "Error: ".$sql."<br>".$conn->error;
                                    }
                                        break;

                                    case "Mesa4";

                                        $sql = "update mesa set Mesa4='$select_status' where idMesa='2'";
        
                                        if ($conn->query($sql) === TRUE) {
    
                                            echo "<p class='atualizou'> Status atualizado! </p>";
                                        } else {
                                            echo "Error: ".$sql."<br>".$conn->error;
                                        }
                                            break;

                                    case "Mesa5";

                                        $sql = "update mesa set Mesa5='$select_status' where idMesa='2'";
                                        
                                        if ($conn->query($sql) === TRUE) {
        
                                            echo "<p class='atualizou'> Status atualizado! </p>";
                                        } else {
                                            echo "Error: ".$sql."<br>".$conn->error;
                                        }
                                            break;
                                            
                                    case "Mesa6";

                                        $sql = "update mesa set Mesa6='$select_status' where idMesa='2'";
                
                                        if ($conn->query($sql) === TRUE) {
            
                                            echo "<p class='atualizou'> Status atualizado! </p>";
                                        } else {
                                            echo "Error: ".$sql."<br>".$conn->error;
                                        }
                                            break;
                                                
                                        case "Mesa7";

                                            $sql = "update mesa set Mesa7='$select_status' where idMesa='2'";
                    
                                            if ($conn->query($sql) === TRUE) {
                
                                                echo "<p class='atualizou'> Status atualizado! </p>";
                                            } else {
                                                echo "Error: ".$sql."<br>".$conn->error;
                                            }
                                                break;

                                        case "Mesa8";

                                            $sql = "update mesa set Mesa8='$select_status' where idMesa='2'";
                        
                                            if ($conn->query($sql) === TRUE) {
                    
                                                echo "<p class='atualizou'> Status atualizado! </p>";
                                            } else {
                                                echo "Error: ".$sql."<br>".$conn->error;
                                            }
                                                break;
                                                        
                                            case "Mesa9";

                                                $sql = "update mesa set Mesa9='$select_status' where idMesa='2'";
                            
                                                if ($conn->query($sql) === TRUE) {
                        
                                                    echo "<p class='atualizou'> Status atualizado! </p>";
                                                } else {
                                                    echo "Error: ".$sql."<br>".$conn->error;
                                                }
                                                    break;

                                            case "Mesa10";

                                                    $sql = "update mesa set Mesa10='$select_status' where idMesa='2'";
                                
                                                if ($conn->query($sql) === TRUE) {
                            
                                                    echo "<p class='atualizou'> Status atualizado! </p>";
                                                } else {
                                                    echo "Error: ".$sql."<br>".$conn->error;
                                                }

                                                    break;
    
                                    
                                            default:

                                                echo "<p class='vazio'> Campo vazio ou status inválido ! </p> ";

                                                    break;
                                    $conn->close();
                                }
                            }
                        ?>
                        <!--- Listagem de status das messas --->
                        <?php require_once('conexao/lista-mesas.php'); ?>
                        
                    </div>
            </section>
        </div>
    </body>
</html>