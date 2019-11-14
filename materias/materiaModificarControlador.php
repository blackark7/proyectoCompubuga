
<?php 


$id = filter_input(INPUT_POST, 'id');
$nombre = filter_input(INPUT_POST, 'nombre');
$carrera = filter_input(INPUT_POST, 'carrera');



include_once 'materiasModelo.php';
$materiasModelo = new materiasModelo();
$materiasModelo->modificar($nombre,$carrera,$id);

    header("Location: materiasAdministrarVista.php");

 

 ?>