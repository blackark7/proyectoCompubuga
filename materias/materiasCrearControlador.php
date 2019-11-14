<?php 
include_once 'materiasModelo.php';
$materiasModelo = new materiasModelo();

$nombre = filter_input(INPUT_POST, 'nombre');
$carrera = filter_input(INPUT_POST, 'carrera');




$materiasModelo->insertar($nombre,$carrera);
    header("Location: materiasAdministrarVista.php");

 

 ?>