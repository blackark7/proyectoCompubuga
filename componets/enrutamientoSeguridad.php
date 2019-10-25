<?php
    @session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../seguridad/loguinVista.php");
        $_SESSION['mensaje'] ="primero inicie sesion";
        exit();
    }
