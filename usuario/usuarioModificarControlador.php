<?php

$id = filter_input(INPUT_POST, 'id');
$tipo = filter_input(INPUT_POST, 'tipo');
$user = filter_input(INPUT_POST, 'user');



    include_once "usuarioModelo.php";
    $usuarioModelo = new usuarioModelo();
    $usuarioModelo->modificar($user,$tipo,$id);




header("Location: ../usuario/usuarioAdministrarVista.php");
