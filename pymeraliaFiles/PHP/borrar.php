<?php 
    include("Curs_class.php");
    $id = $_GET['id'];
    delete('tabla_demo','id',$id);
    header("location:index.php");
?>