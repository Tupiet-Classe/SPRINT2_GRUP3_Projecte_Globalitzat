<?php 
    include("../clases/RecursosURL_class.php");

    $recurs = New Recursos($_POST['id']);
    $recurs -> papeleraRecursos();
?>