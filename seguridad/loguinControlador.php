<?php
    @session_start();
    $user = filter_input(INPUT_POST, 'user');
    $password = filter_input(INPUT_POST, 'password');

    include_once "loguinModelo.php";
    $loguinModelo = new loguinModelo();
    $result = $loguinModelo->consultarUsuario($user, $password);
    $encontro = false;
    while ($fila = mysqli_fetch_array($result)) {

        if ($fila != NULL) {
            $encontro = true;
            $_SESSION['usuario'] = $fila['id'];
            $_SESSION['nombreUsuario'] = $fila['user'];
        }
    }
    if ($encontro){

        header("Location: ../docente/docenteAdministrarVista.php");
    }else{
        header("Location: ../seguridad/loguinVista.php");
        $_SESSION['mensaje'] ="usuario o contraseña incorrectos";
    }
