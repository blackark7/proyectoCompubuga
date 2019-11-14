<?php

$id = filter_input(INPUT_POST, 'id');
$tipo = filter_input(INPUT_POST, 'tipo');
$usuario = filter_input(INPUT_POST, 'nombreUsuario');



    include_once "usuarioModelo.php";
    $usuarioModelo = new usuarioModelo();
    $usuarioModelo->insertar($tipo, $usuario, $id);




header("Location: ../usuario/usuarioAdministrarVista.php");
