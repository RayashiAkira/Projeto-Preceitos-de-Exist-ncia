<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd   = "preceitos_de_existencia";

    $con = new mysqli($host, $user, $pass, $bd);

    if(!$con){

      die("Conexão falhou: " . mysqli_connect_error()); 

    }

?>