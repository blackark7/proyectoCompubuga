<?php

$id = filter_input(INPUT_POST, 'id');
$tipo = filter_input(INPUT_POST, 'tipo');
$usuario = filter_input(INPUT_POST, 'nombreUsuario');
$password = filter_input(INPUT_POST, 'password1');


    include_once "usuarioModelo.php";
    $usuarioModelo = new usuarioModelo();
    $usuarioModelo->insertar($tipo, $usuario, $password, $id);




header("Location: ../usuario/usuarioAdministrarVista.php");
