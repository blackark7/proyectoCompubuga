<?php
$id = filter_input(INPUT_POST,'id');
include_once 'docenteModelo.php';
$docenteModelo = new docenteModelo();
$docenteModelo->eliminar($id);
header("Location: ../docente/docenteAdministrarVista.php");
