<?php

include_once "../conexion.php";

class usuarioModelo {

    function insertar($tipo, $usuario, $password,$foto) {
        $pass = md5($password);
        global $link;
        $consulta = "INSERT INTO `usuarios` (`id`, `user`, `password`, `tipo`, `foto`) VALUES (NULL, '$usuario', '$pass', '$tipo','$foto');";
        $query = mysqli_query($link, $consulta);
    }
    function eliminar($id) {
       
        global $link;
        $consulta = "DELETE FROM `usuarios` WHERE `usuarios`.`id` = $id";
        $query = mysqli_query($link, $consulta);
    }

    function mostrarTodos() {
        global $link;
        $consulta = "SELECT * FROM `usuarios`";
        $query = mysqli_query($link, $consulta);
        return $query;
    }
    
    function modificar($nombreUsuario, $tipo, $id) {
        global $link;
        $consulta = "UPDATE `usuarios` SET `nombreUsuario` = '$nombreUsuario', `tipo` = '$tipo' WHERE `docentes`.`id` = $id;";
        $query = mysqli_query($link, $consulta);
    }
    function modificarFoto($foto,$id) {
        global $link;
        $consulta = "UPDATE `usuarios` SET `foto` = '$foto' WHERE `usuarios`.`id` = $id;";       
        $query = mysqli_query($link, $consulta);
    }


    function mostrar($id) {
        global $link;
        $consulta = "SELECT * FROM `usuarios` WHERE id = $id";
        $query = mysqli_query($link, $consulta);
        return $query;
    }

}
