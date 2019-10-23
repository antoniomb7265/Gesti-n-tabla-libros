<?php 
    require_once("lib/funcionesTabla.php");
    $tabla = generarTabla();
    $cabecera = array_keys($tabla[0]);

    $indice = $_GET['indice'];

    $tabla = eliminar($tabla, $indice);

    require_once("./template/libro.php");
?>