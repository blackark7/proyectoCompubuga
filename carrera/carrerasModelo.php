<?php
    include_once '../conexion.php';
    class carrerasModelo
    {
        function mostrarTodos(){
            global $link;
            $consulta = "SELECT * FROM `carrera`";
            $query = mysqli_query($link, $consulta);
            return $query;
        }


    }
