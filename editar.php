<?php
  require_once("lib/funcionesTabla.php");
  $tabla = generarTabla();
  $cabecera = array_keys($tabla[0]);
  $key = $_GET['indice'];

  //Variables del Formulario
  $formid = $key + 1;
  $formtitulo = $_POST['formtitulo'];
  $formautor = $_POST['formautor'];
  $formcategoria = $_POST['formcategoria'];
  $formeditorial = $_POST['formeditorial'];
  $formprecio = $_POST['formprecio'];
  
  //Array de Libros con el POST
  $actualizarLibro= [
    "Id" => $formid,
    "Titulo" => $formtitulo,
    "Autor" => $formautor,
    "Editorial" => $formcategoria,
    "Género" => $formeditorial,
    "Precio" => $formprecio
  ];
  $tabla = actualizar($tabla, $actualizarLibro, $key);
  require_once("./template/libro.php");
?>