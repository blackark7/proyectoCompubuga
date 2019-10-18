<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "proyectso");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
