<?php 
$id = filter_input(INPUT_GET, 'id');
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
?>
<input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="form-group">
	<label for="exampleFormControlSelect1">Dia de la semana</label>
	<select class="form-control" id="exampleFormControlSelect1" name="diaSemana">

		<?php if ($ml == 1 || $tl == 1 || $nl == 1) { echo '<option value="lunes">Lunes</option>'; } ?>
		<?php if ($mma == 1 || $tma == 1 || $nma == 1) { echo '<option value="martes">Martes</option>'; } ?>
		<?php if ($mmi == 1 || $tmi == 1 || $nmi == 1) { echo '<option value="miercoles">Miercoles</option>'; } ?>
		<?php if ($mj == 1 || $tj == 1 || $nj == 1) { echo '<option value="jueves">Jueves</option>'; } ?>
		<?php if ($mv == 1 || $tv == 1 || $nv == 1) { echo '<option value="viernes">Viernes</option>'; } ?>
		<?php if ($ms == 1 || $ts == 1 || $ns == 1) { echo '<option value="sabado">Sabado</option>'; } ?>
		<?php if ($md == 1 || $td == 1 || $nd == 1) { echo '<option value="domingo">Domingo</option>'; } ?>
	</select>
	</div>
	<div class="form-group">
		<label for="exampleFormControlSelect1">Materia</label>
		<select class="form-control" id="exampleFormControlSelect1" name="materia">
	<?php 
	include_once '../materias/materiasModelo.php';
	$materias = new materiasModelo();
	$result=$materias->mostrarTodos();
	while ($fila = mysqli_fetch_array($result)) {

		if ($fila != NULL) {
         echo '<option value="'.$fila['id'].'">'.$fila['nombre'].'</option>';
		}
	}

	?>	
		</select>
	</div>
	 <div class="form-group">
                                <label for="exampleFormControlSelect1">Hora inicio</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="horaInicio">
                                    <option value="700">7</option>
                                    <option value="730">7.30</option>
                                    <option value="800">8</option>
                                    <option value="830">8.30</option>
                                    <option value="900">9</option>
                                    <option value="930">9.30</option>
                                    <option value="1000">10</option>
                                    <option value="1030">10.30</option>
                                    <option value="1100">11</option>
                                    <option value="1130">11.30</option>
                                    <option value="1200">12</option>
                                    <option value="1230">12.30</option>
                                    <option value="1300">13</option>
                                    <option value="1330">13.30</option>
                                    <option value="1400">14</option>
                                    <option value="1430">14.30</option>
                                    <option value="1500">15</option>
                                    <option value="1530">15.30</option>
                                    <option value="1600">16</option>
                                    <option value="1630">16.30</option>
                                    <option value="1700">17</option>
                                    <option value="1730">17.30</option>
                                    <option value="1800">18</option>
                                    <option value="1830">18.30</option>
                                    <option value="1900">19</option>
                                    <option value="1930">19.30</option>
                                    <option value="2000">20</option>
                                    <option value="2030">20.30</option>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Hora fin</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="horaFin">
                                      <option value="700">7</option>
                                    <option value="730">7.30</option>
                                    <option value="800">8</option>
                                    <option value="830">8.30</option>
                                    <option value="900">9</option>
                                    <option value="930">9.30</option>
                                    <option value="1000">10</option>
                                    <option value="1030">10.30</option>
                                    <option value="1100">11</option>
                                    <option value="1130">11.30</option>
                                    <option value="1200">12</option>
                                    <option value="1230">12.30</option>
                                    <option value="1300">13</option>
                                    <option value="1330">13.30</option>
                                    <option value="1400">14</option>
                                    <option value="1430">14.30</option>
                                    <option value="1500">15</option>
                                    <option value="1530">15.30</option>
                                    <option value="1600">16</option>
                                    <option value="1630">16.30</option>
                                    <option value="1700">17</option>
                                    <option value="1730">17.30</option>
                                    <option value="1800">18</option>
                                    <option value="1830">18.30</option>
                                    <option value="1900">19</option>
                                    <option value="1930">19.30</option>
                                    <option value="2000">20</option>
                                    <option value="2030">20.30</option>
                                    <option value="2100">21</option>


                                </select>
                            </div>