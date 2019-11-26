<?php
$id = filter_input(INPUT_GET, 'id');
include_once 'disponibilidadModelo.php';
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
            <td>
                <?php 
                 if($ml == 0){
                     echo '<input type="checkbox" name="ml" class="form-check-input" id="exampleCheck1"> Mañana';
                 } else {
                     echo '<input type="checkbox" name="ml" class="form-check-input" id="exampleCheck1" checked> Mañana';    
                 }
                ?>                
            </td>            
            <td>
                <?php
                if ($mma == 0){
                    echo '<input type="checkbox" name="mma" class="form-check-input" id="exampleCheck1"> Mañana';
                } else {
                    echo '<input type="checkbox" name="mma" class="form-check-input" id="exampleCheck1" checked> Mañana';
                }
                ?>
            </td>
            <td>
                <?php
                if ($mmi == 0){
                    echo '<input type="checkbox" name="mmi" class="form-check-input" id="exampleCheck1"> Mañana';
                } else {
                    echo '<input type="checkbox" name="mmi" class="form-check-input" id="exampleCheck1" checked> Mañana';
                }
                ?>                
            </td>
            <td>
                <?php
                if ($mj == 0){
                    echo '<input type="checkbox" name="mj" class="form-check-input" id="exampleCheck1"> Mañana';
                }else {
                    echo '<input type="checkbox" name="mj" class="form-check-input" id="exampleCheck1" checked> Mañana';
                }
                ?>
            </td>
            <td>
                <?php
                if ($mv == 0){
                    echo '<input type="checkbox" name="mv" class="form-check-input" id="exampleCheck1"> Mañana';
                } else {
                    echo '<input type="checkbox" name="mv" class="form-check-input" id="exampleCheck1" checked> Mañana';
                }
                ?>                
            </td>
            <td>
                <?php
                if ($ms == 0){
                    echo '<input type="checkbox" name="ms" class="form-check-input" id="exampleCheck1"> Mañana';
                } else {
                    echo '<input type="checkbox" name="ms" class="form-check-input" id="exampleCheck1" checked> Mañana';
                }
                ?>                
            </td>
            <td>
                <?php
                if ($md == 0){
                    echo '<input type="checkbox" name="md" class="form-check-input" id="exampleCheck1"> Mañana'; 
                } else {
                    echo '<input type="checkbox" name="md" class="form-check-input" id="exampleCheck1" checked> Mañana';
                }
                ?>                
            </td>
        </tr>
        <tr>
            <td>
                <?php
                if ($tl == 0){
                    echo '<input type="checkbox" name="tl" class="form-check-input" id="exampleCheck1"> Tarde';
                } else {
                    echo '<input type="checkbox" name="tl" class="form-check-input" id="exampleCheck1" checked> Tarde';
                }
                ?>
                </td>
            <td>
                <?php
                if ($tma == 0){
                    echo '<input type="checkbox" name="tma" class="form-check-input" id="exampleCheck1"> Tarde';
                }else {
                    echo '<input type="checkbox" name="tma" class="form-check-input" id="exampleCheck1" checked> Tarde';
                }
                ?>
                </td>
            <td>
                <?php
                if ($tmi == 0){
                    echo '<input type="checkbox" name="tmi" class="form-check-input" id="exampleCheck1"> Tarde';
                }else {
                    echo '<input type="checkbox" name="tmi" class="form-check-input" id="exampleCheck1" checked> Tarde';
                }
                ?>                
            </td>
            <td>
                <?php
                if ($tj == 0){
                    echo '<input type="checkbox" name="tj" class="form-check-input" id="exampleCheck1"> Tarde';
                } else {
                    echo '<input type="checkbox" name="tj" class="form-check-input" id="exampleCheck1" checked> Tarde';
                }
                ?>
                </td>
            <td>
                <?php
                if ($tv == 0){
                    echo '<input type="checkbox" name="tv" class="form-check-input" id="exampleCheck1"> Tarde';
                }else {
                    echo '<input type="checkbox" name="tv" class="form-check-input" id="exampleCheck1" checked> Tarde';
                }
                ?>
                </td>
            <td>
                <?php
                if ($ts == 0){
                    echo '<input type="checkbox" name="ts" class="form-check-input" id="exampleCheck1"> Tarde';
                }else {
                    echo '<input type="checkbox" name="ts" class="form-check-input" id="exampleCheck1" checked> Tarde';
                }
                ?>
                </td>
            <td>
                <?php
                if ($td == 0){
                    echo '<input type="checkbox" name="td" class="form-check-input" id="exampleCheck1"> Tarde';
                } else {
                    echo '<input type="checkbox" name="td" class="form-check-input" id="exampleCheck1" checked> Tarde';
                }
                ?>
                </td>
        </tr>
        <tr>
            <td>
                <?php
                if ($nl == 0){
                    echo '<input type="checkbox" name="nl" class="form-check-input" id="exampleCheck1"> Noche';
                }else {
                    echo '<input type="checkbox" name="nl" class="form-check-input" id="exampleCheck1" checked> Noche';
                }
                ?>
                </td>
            <td>
                <?php
                if ($nma == 0){
                    echo '<input type="checkbox" name="nma" class="form-check-input" id="exampleCheck1"> Noche';
                } else {
                    echo '<input type="checkbox" name="nma" class="form-check-input" id="exampleCheck1" checked> Noche';
                }
                ?>
                </td>
            <td>
                <?php
                if ($nmi == 0){
                    echo '<input type="checkbox" name="nmi" class="form-check-input" id="exampleCheck1"> Noche';
                }else {
                    echo '<input type="checkbox" name="nmi" class="form-check-input" id="exampleCheck1" checked> Noche';
                }
                ?>                
            </td>
            <td>
                <?php
                if ($nj == 0){
                    echo '<input type="checkbox" name="nj" class="form-check-input" id="exampleCheck1"> Noche';
                }else {
                    echo '<input type="checkbox" name="nj" class="form-check-input" id="exampleCheck1" checked> Noche';
                }
                ?>
                </td>
            <td>
                <?php
                if ($nv == 0){
                    echo '<input type="checkbox" name="nv" class="form-check-input" id="exampleCheck1"> Noche';
                }else {
                    echo '<input type="checkbox" name="nv" class="form-check-input" id="exampleCheck1" checked> Noche';
                }
                ?>
                </td>
            <td>
                <?php
                if ($ns == 0){
                    echo '<input type="checkbox" name="ns" class="form-check-input" id="exampleCheck1"> Noche';
                } else {
                    echo '<input type="checkbox" name="ns" class="form-check-input" id="exampleCheck1" checked> Noche';
                }
                ?>
                </td>
            <td>
                <?php
                if ($nd == 0){
                    echo '<input type="checkbox" name="nd" class="form-check-input" id="exampleCheck1"> Noche';
                }else {
                    echo '<input type="checkbox" name="nd" class="form-check-input" id="exampleCheck1" checked> Noche';
                }
                ?>
                </td>
        </tr>

        </tr>
    </tbody>
</table>
