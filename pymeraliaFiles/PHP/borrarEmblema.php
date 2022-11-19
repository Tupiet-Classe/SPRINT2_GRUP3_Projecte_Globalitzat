<?php

    include("../clases/Emblema_class.php");
    $emblema = new Emblema($_POST['id']);
    $emblema->papeleraEmblema();

    header("location:emblemasAdmin.php");
?>