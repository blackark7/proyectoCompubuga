<?php 
include_once 'materiasModelo.php';
$materiasModelo = new materiasModelo();

$materia = filter_input(INPUT_POST, 'materia');
$carrera = filter_input(INPUT_POST, 'carrera');




$materiasModelo->insertar($materia,$carrera);
    header("Location: materiasAdministrarVista.php");

 

 ?>