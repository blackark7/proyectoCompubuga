<?php 
//si es 1 en la bd es porque se encuentra disponible
//si hay un 0 en la bd es porque no se encuentra disponible 
$id = filter_input(INPUT_POST, 'id');
$ml = (filter_input(INPUT_POST, 'ml',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$mma = (filter_input(INPUT_POST, 'mma',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$mmi = (filter_input(INPUT_POST, 'mmi',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$mj = (filter_input(INPUT_POST, 'mj',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$mv = (filter_input(INPUT_POST, 'mv',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$ms = (filter_input(INPUT_POST, 'ms',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$md = (filter_input(INPUT_POST, 'md',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$tl = (filter_input(INPUT_POST, 'tl',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$tma = (filter_input(INPUT_POST, 'tma',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$tmi = (filter_input(INPUT_POST, 'tmi',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$tj = (filter_input(INPUT_POST, 'tj',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$tv = (filter_input(INPUT_POST, 'tv',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$ts = (filter_input(INPUT_POST, 'ts',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$td = (filter_input(INPUT_POST, 'td',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$nl = (filter_input(INPUT_POST, 'nl',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$nma = (filter_input(INPUT_POST, 'nma',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$nmi = (filter_input(INPUT_POST, 'nmi',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$nj = (filter_input(INPUT_POST, 'nj',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$nv = (filter_input(INPUT_POST, 'nv',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$ns = (filter_input(INPUT_POST, 'ns',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
$nd = (filter_input(INPUT_POST, 'nd',FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE))?1:0;
 
include_once 'disponibilidadModelo.php';
$disponibilidad = new disponibilidadModelo();
$disponibilidad -> modificar($id, $nl, $nma, $nmi, $nj, $nv, $ns, $nd, $tl, $tma, $tmi, $tj, $tv, $ts, $td, $ml, $mma, $mmi, $mj, $mv, $ms, $md);
header("Location: ../docente/docenteAdministrarVista.php");

