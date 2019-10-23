<?php 
    require_once("lib/funcionesTabla.php");
    $tabla = generarTabla();
    $cabecera = array_keys($tabla[0]);

    $filtro = $_GET['filtro'];

    $tabla = filtrar($tabla, $filtro);

    require_once("./template/libro.php");
?>