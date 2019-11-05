<?php
$id = filter_input(INPUT_POST,'id');
include_once 'carrerasModelo.php';
$carrerasModelo = new carrerasModelo();
$carrerasModelo->eliminar($id);
header("Location: ../carrera/carreraAdministrarVista.php");

