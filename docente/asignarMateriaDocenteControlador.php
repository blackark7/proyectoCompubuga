<?php
@session_start(); 
$id = filter_input(INPUT_POST, 'id');
$diaSemana = filter_input(INPUT_POST, 'diaSemana');
$materia = filter_input(INPUT_POST, 'materia');
$horaInicio = filter_input(INPUT_POST, 'horaInicio');
$horaFin = filter_input(INPUT_POST, 'horaFin');
$dispo = true;
include_once '../disponibilidad/disponibilidadModelo.php';
$disponibilidadModelo = new disponibilidadModelo();
$result=$disponibilidadModelo->mostrar($id);
while ($fila = mysqli_fetch_array($result)) {

	if ($fila != NULL) {
		$ml = $fila['ml'];
		$mma = $fila['mma'];
		$mmi = $fila['mmi'];
		$mj = $fila['mj'];
		$mv = $fila['mv'];
		$ms = $fila['ms'];
		$md = $fila['md'];
		$tl = $fila['tl'];
		$tma = $fila['tma'];
		$tmi = $fila['tmi'];
		$tj = $fila['tj'];
		$tv = $fila['tv'];
		$ts = $fila['ts'];
		$td = $fila['td'];
		$nl = $fila['nl'];
		$nma = $fila['nma'];
		$nmi = $fila['nmi'];
		$nj = $fila['nj'];
		$nv = $fila['nv'];
		$ns = $fila['ns'];
		$nd = $fila['nd'];
	}
}
if ($diaSemana == 'lunes') {
	if ($horaInicio >= 700 && $horaFin <=1200 && $ml == 0) {
		$dispo = false;
	}
	if ($horaInicio > 1200 && $horaFin <=1800 && $tl == 0) {
		$dispo = false;
	}
	if ($horaInicio > 1800 && $horaFin <=2100 && $nl == 0) {
		$dispo = false;
	}
}

if ($diaSemana == 'martes') {
	if ($horaInicio >= 700 && $horaFin <=1200 && $mma == 0) {
		$dispo = false;
	}
	if ($horaInicio > 1200 && $horaFin <=1800 && $tma == 0) {
		$dispo = false;
	}
	if ($horaInicio > 1800 && $horaFin <=2100 && $nma == 0) {
		$dispo = false;
	}
}

if ($diaSemana == 'miercoles') {
	if ($horaInicio >= 700 && $horaFin <=1200 && $mmi == 0) {
		$dispo = false;
	}
	if ($horaInicio > 1200 && $horaFin <=1800 && $tmi == 0) {
		$dispo = false;
	}
	if ($horaInicio > 1800 && $horaFin <=2100 && $nmi == 0) {
		$dispo = false;
	}
}

if ($diaSemana == 'jueves') {
	if ($horaInicio >= 700 && $horaFin <=1200 && $mj == 0) {
		$dispo = false;
	}
	if ($horaInicio > 1200 && $horaFin <=1800 && $tj == 0) {
		$dispo = false;
	}
	if ($horaInicio > 1800 && $horaFin <=2100 && $nj == 0) {
		$dispo = false;
	}
}

if ($diaSemana == 'viernes') {
	if ($horaInicio >= 700 && $horaFin <=1200 && $mv == 0) {
		$dispo = false;
	}
	if ($horaInicio > 1200 && $horaFin <=1800 && $tv == 0) {
		$dispo = false;
	}
	if ($horaInicio > 1800 && $horaFin <=2100 && $nv == 0) {
		$dispo = false;
	}
}

if ($diaSemana == 'sabado') {
	if ($horaInicio >= 700 && $horaFin <=1200 && $ms == 0) {
		$dispo = false;
	}
	if ($horaInicio > 1200 && $horaFin <=1800 && $ts == 0) {
		$dispo = false;
	}
	if ($horaInicio > 1800 && $horaFin <=2100 && $ns == 0) {
		$dispo = false;
	}
}

if ($diaSemana == 'domingo') {
	if ($horaInicio >= 700 && $horaFin <=1200 && $md == 0) {
		$dispo = false;
	}
	if ($horaInicio > 1200 && $horaFin <=1800 && $td == 0) {
		$dispo = false;
	}
	if ($horaInicio > 1800 && $horaFin <=2100 && $nd == 0) {
		$dispo = false;
	}
}



if ($dispo) {
	include_once '../horario/horarioModelo.php';
	$horario = new horarioModelo();
	$horario -> insertar($id,$materia,$diaSemana,$horaInicio,$horaFin);
	$_SESSION['dis'] = '<script type="text/javascript"> window.alert("El docente se asignó con exito."); </script> ';
}else{
	$_SESSION['dis'] = '<script type="text/javascript"> window.alert("El docente no se encuentra disponible en el horario seleccionado."); </script>';
}

header('Location: ../docente/docenteAdministrarVista.php');



?>
