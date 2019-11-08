<?php
$id = filter_input(INPUT_POST,'id');
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
$docenteModelo->modificarFoto($destino,$id);
header("Location: docenteAdministrarVista.php"); 

}
