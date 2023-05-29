<?php

    $sql = "SELECT idMesa, Mesa1, Mesa2, Mesa3, Mesa4, Mesa5, Mesa6, Mesa7, Mesa8, Mesa9, Mesa10 FROM mesa";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){

        while ($row = $result->fetch_assoc()){

            // <--------- Início de Listagem das mesas disponíveis ---------> //
            
            if($row["Mesa1"] == "DISPONÍVEL") {
                echo "<div class='box-mesas'> <h3> Mesa 1 - status : </h3> <p class='text-green'> Disponível </p> </div>";
            }

            if($row["Mesa2"] == "DISPONÍVEL") {
                echo "<div class='box-mesas'> <h3> Mesa 2 - status : </h3> <p class='text-green'> Disponível </p> </div>";
            }

            if($row["Mesa3"] == "DISPONÍVEL") {
                echo "<div class='box-mesas'> <h3> Mesa 3 - status : </h3> <p class='text-green'> Disponível </p> </div>";
            }

            if($row["Mesa4"] == "DISPONÍVEL") {
                echo "<div class='box-mesas'> <h3> Mesa 4 - status : </h3> <p class='text-green'> Disponível </p> </div>";
            }

            if($row["Mesa5"] == "DISPONÍVEL") {
                echo "<div class='box-mesas'> <h3> Mesa 5 - status : </h3> <p class='text-green'> Disponível </p> </div>";
            }

            if($row["Mesa6"] == "DISPONÍVEL") {
                echo "<div class='box-mesas'> <h3> Mesa 6 - status : </h3> <p class='text-green'> Disponível </p> </div>";
            }

            if($row["Mesa7"] == "DISPONÍVEL") {
                echo "<div class='box-mesas'> <h3> Mesa 7 - status : </h3> <p class='text-green'> Disponível </p> </div>";
            }

            if($row["Mesa8"] == "DISPONÍVEL") {
                echo "<div class='box-mesas'> <h3> Mesa 8 - status : </h3> <p class='text-green'> Disponível </p> </div>";
            }

            if($row["Mesa9"] == "DISPONÍVEL") {
                echo "<div class='box-mesas'> <h3> Mesa 9 - status : </h3> <p class='text-green'> Disponível </p> </div>";
            }

            if($row["Mesa10"] == "DISPONÍVEL") {
                echo "<div class='box-mesas'> <h3> Mesa 10 - status : </h3> <p class='text-green'> Disponível </p> </div>";
            }

             // <--------- Fim de Listagem das mesas disponíveis ---------> //


            // <--------- Início de Listagem das mesas ocupadas ---------> //

            if($row["Mesa1"] == "OCUPADA") {
                echo "<div class='box-mesas'> <h3> Mesa 1 - status : </h3> <p class='text-red'> Ocupada </p> </div>";
            }

            if($row["Mesa2"] == "OCUPADA") {
                echo "<div class='box-mesas'> <h3> Mesa 2 - status : <p class='text-red'> Ocupada </p> </div>";
            }

            if($row["Mesa3"] == "OCUPADA") {
                echo "<div class='box-mesas'> <h3> Mesa 3 - status : <p class='text-red'> Ocupada </p> </div>";
            }

            if($row["Mesa4"] == "OCUPADA") {
                echo "<div class='box-mesas'> <h3> Mesa 4 - status : <p class='text-red'> Ocupada </p> </div>";
            }

            if($row["Mesa5"] == "OCUPADA") {
                echo "<div class='box-mesas'> <h3> Mesa 5 - status : <p class='text-red'> Ocupada </p> </div>";
            }

            if($row["Mesa6"] == "OCUPADA") {
                echo "<div class='box-mesas'> <h3> Mesa 6 - status : <p class='text-red'> Ocupada </p> </div>";
            }

            if($row["Mesa7"] == "OCUPADA") {
                echo "<div class='box-mesas'> <h3> Mesa 7 - status : <p class='text-red'> Ocupada </p> </div>";
            }

            if($row["Mesa8"] == "OCUPADA") {
                echo "<div class='box-mesas'> <h3> Mesa 8 - status : <p class='text-red'> Ocupada </p> </div>";
            }

            if($row["Mesa9"] == "OCUPADA") {
                echo "<div class='box-mesas'> <h3> Mesa 9 - status : <p class='text-red'> Ocupada </p> </div>";
            }

            if($row["Mesa10"] == "OCUPADA") {
                echo "<div class='box-mesas'> <h3> Mesa 10 - status : <p class='text-red'> Ocupada </p> </div>";
            }
            // <--------- Fim de Listagem das mesas ocupadas ---------> //
        }

    } else {
        echo "0 results";

    }

    $conn->close();

?>