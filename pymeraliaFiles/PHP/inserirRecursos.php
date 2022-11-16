<?php 

include_once '../clases/RecursosURL_class.php';
include_once '../validacions/validacions.php';


$recurs = new Recursos(filtrado($_POST['titulo']),filtrado($_POST['descripcionURL']),filtrado($_POST['type']));
$recurs->addRecursos();
header('location: ../admin/detallesCurso.php');
?>