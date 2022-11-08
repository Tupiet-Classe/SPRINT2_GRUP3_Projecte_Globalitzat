<?php
include_once '../clases/Curs_class.php';
$userId = $_GET['userid'];
$curso = new Curs(1, 'ciber', 'algo', 'gf');
$curso->assignCurso($userId)
?>