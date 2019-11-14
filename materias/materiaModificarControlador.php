
<?php 


$id = filter_input(INPUT_POST, 'id');
$materia = filter_input(INPUT_POST, 'materia');
$carrera = filter_input(INPUT_POST, 'carrera');



include_once 'materiasModelo.php';
$materiasModelo = new materiasModelo();
$materiasModelo->modificar($materia,$carrera);

    header("Location: materiasAdministrarVista.php");

 

 ?>