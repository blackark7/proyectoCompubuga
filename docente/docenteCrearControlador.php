<?php 

$documento = filter_input(INPUT_POST, 'documento');
$nombre = filter_input(INPUT_POST, 'nombre');
$fecha = filter_input(INPUT_POST, 'fecha');
$carrera = filter_input(INPUT_POST, 'carrera');
$telefono = filter_input(INPUT_POST, 'telefono');
$direccion = filter_input(INPUT_POST, 'direccion');

/*  echo "Documento: $documento <br>";
echo "Nombre: $nombre <br>";
echo "Fecha: $fecha <br>";
echo "Area: $area <br>";
echo "Telefono: $telefono <br>";
echo "Direccion: $direccion <br>";  

 ?>