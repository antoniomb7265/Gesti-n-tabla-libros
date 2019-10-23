<?php
  require_once("lib/funcionesTabla.php");
  $tabla = generarTabla();
  $cabecera = array_keys($tabla[0]);

  //Variables del Formulario
  $formid = ultimoId($tabla) + 1;
  $formtitulo = $_POST['formtitulo'];
  $formautor = $_POST['formautor'];
  $formcategoria = $_POST['formcategoria'];
  $formeditorial = $_POST['formeditorial'];
  $formprecio = $_POST['formprecio'];
  
  //Array de Libros con el POST
  $nuevoLibro= [
    "Id" => $formid,
    "Titulo" => $formtitulo,
    "Autor" => $formautor,
    "Editorial" => $formcategoria,
    "Género" => $formeditorial,
    "Precio" => $formprecio
  ];

  $tabla[] = $nuevoLibro;
  require_once("./template/libro.php");
?>