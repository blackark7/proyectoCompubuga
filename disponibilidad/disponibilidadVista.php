<?php
$id = filter_input(INPUT_GET, 'id');
include_once 'disponibilidadModelo.php';
$disponibilidadModelo = new disponibilidadModelo();
$disponibilidadModelo->mostrar($id);
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
        $tm = $fila['tm'];
        $tmi = $fila['tmi'];
        $tj = $fila['tj'];
        $tv = $fila['tv'];
        $ts = $fila['ts'];
        $td = $fila['td'];
        $nl = $fila['nl'];
        $nm = $fila['nm'];
        $nmi = $fila['nmi'];
        $nj = $fila['nj'];
        $nv = $fila['nv'];
        $ns = $fila['ns'];
        $nd = $fila['nd'];
    }
}
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Lunes</th>
            <th scope="col">Martes</th>
            <th scope="col">Miercoles</th>
            <th scope="col">Jueves</th>
            <th scope="col">Viernes</th>
            <th scope="col">Sabado</th>
            <th scope="col">Domingo</th>
        </tr>
    </thead>
    <tbody>


        <tr>
            <td><input type="checkbox" name="ml" class="form-check-input" id="exampleCheck1"> Mañana
            </td>
            <td><input type="checkbox" name="mma" class="form-check-input" id="exampleCheck1"> Mañana
            </td>
            <td><input type="checkbox" name="mmi" class="form-check-input" id="exampleCheck1"> Mañana
            </td>
            <td><input type="checkbox" name="mj" class="form-check-input" id="exampleCheck1"> Mañana
            </td>
            <td><input type="checkbox" name="mv" class="form-check-input" id="exampleCheck1"> Mañana
            </td>
            <td><input type="checkbox" name="ms" class="form-check-input" id="exampleCheck1"> Mañana
            </td>
            <td><input type="checkbox" name="md" class="form-check-input" id="exampleCheck1"> Mañana
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" name="tl" class="form-check-input" id="exampleCheck1"> Tarde</td>
            <td><input type="checkbox" name="tm" class="form-check-input" id="exampleCheck1"> Tarde</td>
            <td><input type="checkbox" name="tmi" class="form-check-input" id="exampleCheck1"> Tarde
            </td>
            <td><input type="checkbox" name="tj" class="form-check-input" id="exampleCheck1"> Tarde</td>
            <td><input type="checkbox" name="tv" class="form-check-input" id="exampleCheck1"> Tarde</td>
            <td><input type="checkbox" name="ts" class="form-check-input" id="exampleCheck1"> Tarde</td>
            <td><input type="checkbox" name="td" class="form-check-input" id="exampleCheck1"> Tarde</td>
        </tr>
        <tr>
            <td><input type="checkbox" name="nl" class="form-check-input" id="exampleCheck1"> Noche</td>
            <td><input type="checkbox" name="nm" class="form-check-input" id="exampleCheck1"> Noche</td>
            <td><input type="checkbox" name="nmi" class="form-check-input" id="exampleCheck1"> Noche
            </td>
            <td><input type="checkbox" name="nj" class="form-check-input" id="exampleCheck1"> Noche</td>
            <td><input type="checkbox" name="nv" class="form-check-input" id="exampleCheck1"> Noche</td>
            <td><input type="checkbox" name="ns" class="form-check-input" id="exampleCheck1"> Noche</td>
            <td><input type="checkbox" name="nd" class="form-check-input" id="exampleCheck1"> Noche</td>
        </tr>

        </tr>
    </tbody>
</table>
