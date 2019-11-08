<?php
$id = filter_input(INPUT_POST, 'id');
$nombre = filter_input(INPUT_POST, 'nombre');
$carrera = filter_input(INPUT_POST, 'carrera');
$telefono = filter_input(INPUT_POST, 'telefono');
$documento = filter_input(INPUT_POST, 'documento');
$fecha = filter_input(INPUT_POST, 'fecha');
$direccion = filter_input(INPUT_POST, 'direccion');

include_once "docenteModelo.php";
$docenteModelo = new docenteModelo();
$docenteModelo->modificar($nombre, $carrera, $telefono, $documento, $fecha, $direccion,$id);



header("Location: docenteAdministrarVista.php");
?>
