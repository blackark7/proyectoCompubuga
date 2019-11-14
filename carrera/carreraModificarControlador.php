<?php 


$id = filter_input(INPUT_POST, 'id');
$carrera = filter_input(INPUT_POST, 'carrera');

include_once 'carrerasModelo.php';
$carreraModelo = new carrerasModelo();
$carreraModelo->modificar($carrera, $id);
    header("Location: carreraAdministrarVista.php");
  

 ?>
