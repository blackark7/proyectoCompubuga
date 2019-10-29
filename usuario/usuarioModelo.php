<?php

include_once "../conexion.php";

class usuarioModelo {

    function insertar($tipo, $usuario, $password,$foto) {
        $pass = md5($password);
        global $link;
        $consulta = "INSERT INTO `usuarios` (`id`, `user`, `password`, `tipo`, `foto`) VALUES (NULL, '$usuario', '$pass', '$tipo','$foto');";
        $query = mysqli_query($link, $consulta);
    }

    function mostrarTodos() {
        global $link;
        $consulta = "SELECT * FROM `usuarios`";
        $query = mysqli_query($link, $consulta);
        return $query;
    }

}
