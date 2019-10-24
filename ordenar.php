<?php 
    require_once("lib/funcionesTabla.php");
    $tabla = generarTabla();
    $cabecera = array_keys($tabla[0]);
    $ordenando = $_GET['ordenando'];
    $tabla = ordenar($tabla, $ordenando);

    require_once("./template/libro.php");
?>