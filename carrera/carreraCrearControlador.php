<?php 
include_once 'carrerasModelo.php';
$carreraModelo = new carrerasModelo();

$carrera = filter_input(INPUT_POST, 'carrera');


$carreraModelo->insertar($carrera);
    header("Location: carreraAdministrarVista.php");
  

 ?>