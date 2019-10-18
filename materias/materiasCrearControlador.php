<?php 
include_once 'materiasModelo.php';
$materiasModelo = new materiasModelo();

$materia = filter_input(INPUT_POST, 'materia');
$area = filter_input(INPUT_POST, 'area');




$materiasModelo->insertar($materia,$area);
    header("Location: materiasAdministrarVista.php");

 

 ?>