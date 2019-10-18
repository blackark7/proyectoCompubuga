<?php 

$diaSemana = filter_input(INPUT_POST, 'diaSemana');
$materia = filter_input(INPUT_POST, 'materia');
$horaInicio = filter_input(INPUT_POST, 'horaInicio');
$horaFin = filter_input(INPUT_POST, 'horaFin');





 echo "DIA DE LA SEMANA: $diaSemana <br>";
echo "MATERIA: $materia <br>";
 echo "HORA DE INICIO: $horaInicio <br>";
echo "HORA DE FIN: $horaFin <br>";



?>