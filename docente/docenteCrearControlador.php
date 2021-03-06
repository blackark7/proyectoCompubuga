<?php

$nombre = filter_input(INPUT_POST, 'nombre');
$carrera = filter_input(INPUT_POST, 'carrera');
$telefono = filter_input(INPUT_POST, 'telefono');
$documento = filter_input(INPUT_POST, 'documento');
$fecha = filter_input(INPUT_POST, 'fecha');
$direccion = filter_input(INPUT_POST, 'direccion');

$foto = $_FILES["foto"]["name"];
$archivo = $_FILES["foto"]["tmp_name"];
$destino = "../img/" . $foto;
$move = move_uploaded_file($archivo, $destino);

if (!$move) {
    $codigo = $_FILES['foto']['error'];
    echo 'codigo error: ' . $codigo;
    echo 'la imagen  no pudo ser movida';
} else {
    include_once "docenteModelo.php";
    $docenteModelo = new docenteModelo();
    $docenteModelo->insertar($nombre, $carrera, $telefono, $documento, $fecha, $direccion, $destino);
    $id = $docenteModelo->ultimoId();
    include_once '../disponibilidad/disponibilidadModelo.php';
    $disponibilidadModelo = new disponibilidadModelo();
    $disponibilidadModelo->insertar($id, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
}

header("Location: docenteAdministrarVista.php");
?>