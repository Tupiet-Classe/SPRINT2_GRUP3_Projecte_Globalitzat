<?php 

include_once '../clases/Emblema_class.php';

$recurs = new Emblema();
$recurs->papeleraEmblema();
header('location: ../admin/emblemasAdmin.php');
?>