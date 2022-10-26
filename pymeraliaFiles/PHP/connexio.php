<?php

    $servername = "mariadb";
    $database = "MirMeet";
    $username = "super";
    $password = "MirMeet12";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("La connexió ha fallat:" . mysqli_connect_error());
    }

    echo "Connectat satisfactoriament."
    
?>