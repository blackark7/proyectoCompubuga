
<?php
include_once '../conexion.php';
    class docenteModelo
    {
      function insertar($nombre,$carrera, $telefono, $documento, $fecha, $direccion){
          global $link;
          $consulta = "INSERT INTO `docentes` (`id`, `nombre`, `carrera`, `telefono`, `documento`, `fecha`, `direccion`) VALUES (NULL, '$nombre', '$carrera', '$telefono', '$documento', '$fecha', '$direccion');";
          $query = mysqli_query($link, $consulta);
      }
        function mostrarTodos(){
            global $link;
            $consulta = "SELECT * FROM `docentes`";
            $query = mysqli_query($link, $consulta);
            return $query;
        }
    }

?>
