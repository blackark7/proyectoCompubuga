<?php
    include_once '../conexion.php';

    class loguinModelo {

        function consultarUsuario($user,$password){
            global $link;
            $pass = md5($password);
            $consulta = "SELECT * FROM `usuarios` WHERE user='$user' and password = '$pass'";
            $query = mysqli_query($link, $consulta);
            return $query;

        }
    }

