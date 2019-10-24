<?php

  # incluimos la libreria de funciones para tabla
  require_once("lib/funcionesTabla.php");

  $tabla = generarTabla();

  #definimos la tabla libros
  /* $registro =[
    "Id" => "2",
    "Titulo" => "Los Señores del tiempo",
    "Autor" => "Garcia Senz de Urturi",
    "Editorial" => "alfaguara",
    "Género" => "Novela",
    "Precio" => "19.5€"
  ];

  $nuevo =[
    "Id" => "5",
    "Titulo" => "Los anillos ",
    "Autor" => "paco collado",
    "Editorial" => "El fin",
    "Género" => "Suspense",
    "Precio" => "27.5€"
  ]; */

  // $tabla=actualizar($tabla, $registro,1);
  
  // $tabla=nuevo($tabla, $nuevo,5);

  // $tabla=ordenar($tabla, "Precio");
  
  // $tabla=filtrar($tabla, "");

  $cabecera = array_keys($tabla[0]);
  
  require_once("./template/libro.php");
?>