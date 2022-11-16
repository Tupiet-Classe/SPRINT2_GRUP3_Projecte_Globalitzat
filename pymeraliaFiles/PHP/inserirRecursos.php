<?php 

include_once '../clases/RecursosURL_class.php';

$recurs = new Recursos($_POST['titulo'],$_POST['descripcionURL'],$_POST['type']);
$recurs->addRecursos();
header('location: ../admin/detallesCurso.php');
?>