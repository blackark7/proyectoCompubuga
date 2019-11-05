<?php
$id = filter_input(INPUT_POST,'id');
include_once 'materiasModelo.php';
$materiasModelo = new materiasModelo();
$materiasModelo->eliminar($id);
header("Location: ../materias/materiasAdministrarVista.php");

