<?php
include_once '../conexion.php';
    class materiasModelo
    {
      function insertar($nombre,$carrera){
          global $link;
          $consulta = "INSERT INTO `materia` (`id`, `nombre`, `carrera`) VALUES (NULL, '$nombre', '$carrera');";
          $query = mysqli_query($link, $consulta);
      }
        function mostrarTodos(){
            global $link;
            $consulta = "SELECT * FROM `materia`";
            $query = mysqli_query($link, $consulta);
            return $query;
        }
    }

?>
