<?php
$id = filter_input(INPUT_POST,'id');
include_once 'usuarioModelo.php';
$usuarioModelo = new usuarioModelo();
$usuarioModelo->eliminar($id);
header("Location: ../usuario/usuarioAdministrarVista.php");
