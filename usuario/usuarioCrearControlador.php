<?php

$tipo = filter_input(INPUT_POST, 'tipo');
$usuario = filter_input(INPUT_POST, 'nombreUsuario');
$password = filter_input(INPUT_POST, 'password1');

$foto = $_FILES["foto"]["name"];
$archivo = $_FILES["foto"]["tmp_name"];
$destino = "../img/" . $foto;
$move = move_uploaded_file($archivo, $destino);

if (!$move) {
    $codigo = $_FILES['foto']['error'];
    echo 'codigo error: ' . $codigo;
    echo 'la imagen  no pudo ser movida';
} else {
    include_once "usuarioModelo.php";
    $usuarioModelo = new usuarioModelo();
    $usuarioModelo->insertar($tipo, $usuario, $password, $destino);
}



header("Location: ../usuario/usuarioAdministrarVista.php");
