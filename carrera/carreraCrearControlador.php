<?php 
include_once 'carreraModelo.php';
$carreraModelo = new carreraModelo();

$carrera = filter_input(INPUT_POST, 'carrera');


$carreraModelo->insertar($carrera);
    header("Location: carreraAdministrarVista.php");
  

 ?>