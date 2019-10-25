<?php
    @session_start();
    unset($_SESSION['usuario']);
    header("Location: ../seguridad/loguinVista.php");
    $_SESSION['mensaje'] ="ha finalizado la sesion.";
