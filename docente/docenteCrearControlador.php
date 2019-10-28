<?php 

include_once 'docenteModelo.php';
$docenteModelo = new docenteModelo();

$nombre = filter_input(INPUT_POST, 'nombre');
$carrera = filter_input(INPUT_POST, 'carrera');
$telefono = filter_input(INPUT_POST, 'telefono');
$documento = filter_input(INPUT_POST, 'documento');
$fecha = filter_input(INPUT_POST, 'fecha');
$direccion = filter_input(INPUT_POST, 'direccion');

$docenteModelo->insertar($nombre,$carrera,$telefono,$documento,$fecha,$direccion);
    header("Location: docenteAdministrarVista.php"); 

 ?>