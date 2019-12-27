<?php 
include_once 'materiasModelo.php';


$nombre = filter_input(INPUT_POST, 'nombre');
$carrera = filter_input(INPUT_POST, 'carrera');



$materiasModelo = new materiasModelo();
$materiasModelo->insertar($nombre,$carrera);
    header("Location: materiasAdministrarVista.php");

 

 ?>