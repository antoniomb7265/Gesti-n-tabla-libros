<?php
  require_once("lib/funcionesTabla.php");
  $tabla = generarTabla();
  $cabecera = array_keys($tabla[0]);
  $desplegable = generarDesplegable();
  $key = $_GET['indice'];

  //Variables del Formulario
  $formid = $key + 1;
  $formtitulo = $_POST['formtitulo'];
  $formautor = $_POST['formautor'];
  // $formcategoria = $_POST['formcategoria'];
  $formcategoria = $desplegable[$_POST['formcategoria']];
  $formeditorial = $_POST['formeditorial'];
  $formprecio = $_POST['formprecio'];
  
  //Array de Libros con el POST
  $actualizarLibro= [
    "Id" => $formid,
    "Descripcion" => $formtitulo,
    "Modelo" => $formautor,
    "Categoria" => $formcategoria,
    "Unidades" => $formeditorial,
    "Precio" => $formprecio
  ];
  $tabla = actualizar($tabla, $actualizarLibro, $key);
  require_once("./template/libro.php");
?>