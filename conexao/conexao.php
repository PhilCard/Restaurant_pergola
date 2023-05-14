<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Pergola";

   $conn=mysqli_connect($servername,$username,$password,$dbname);

   if(!$conn){
    die('could not connect mysql: ' . mysql_error());
   }
    
  
?>