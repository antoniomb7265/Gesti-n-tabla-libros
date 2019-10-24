<?php

function generarDesplegable(){

    $desplegable = [
        "Sobremesa",
        "Pantalla",
        "Impresora",
        "Componente",
        "Portatil"
    ];
    return $desplegable;

}

function generarTabla(){
    /* Fichero: FuncionesTabla.php
    Descripción: Colección de funciones para la gestión de una tabla
    Proyecto: Actividad 3.5
    Fecha: 16/10/2019
    */

    /*Genera una matriz de libros índice primario escalar
    índice secundario asociativo
    Argumentos de entrada: null
    Salida: Tabla de Libros */


    $tabla = 
    [
        [
            "Id" => "1",
            "Descripcion" => "Teclado gaming - Acer N90",
            "Modelo" => "Acer N90",
            "Categoria" => "Sobremesa",
            "Unidades" => "60",
            "Precio" => "14.50"
        ],
        [
            "Id" => "2",
            "Descripcion" => "Pantalla - 4k Asus Qled",
            "Modelo" => "Asus Qled",
            "Categoria" => "Pantalla",
            "Unidades" => "15",
            "Precio" => "190.00"
        ],
        [
            "Id" => "3",
            "Descripcion" => "Impresora - Brother C10 R",
            "Modelo" => "Brother C10 R",
            "Categoria" => "Impresora",
            "Unidades" => "56",
            "Precio" => "59.59"
        ],
        [
            "Id" => "4",
            "Descripcion" => "Disco duro SSD - Kingston 128 GB",
            "Modelo" => "Kingston 128 GB",
            "Categoria" => "Componente",
            "Unidades" => "78",
            "Precio" => "49.00"
        ],
        [
            "Id" => "5",
            "Descripcion" => "Portatil gaming - MSI 8 GB RAM / 500 GB SSD",
            "Modelo" => "MSI 8 GB RAM / 500 GB SSD",
            "Categoria" => "Portatil",
            "Unidades" => "24",
            "Precio" => "1039.70"
        ]
    ];

    return $tabla;

}

function eliminar($tabla, $key){

        unset($tabla[$key]);
        # Reconstruye los índices primarios de la tabla
        $tabla = array_values ($tabla);
        return $tabla;
}

#crea la funcion actualizar libro
function actualizar ($tabla, $registro, $key ){
    $tabla[$key]=$registro;
    return $tabla;
}

#crea la funcion nuevo libro
function nuevo ($tabla, $nuevo){
    $tabla[]=$nuevo;
    return ($tabla);
}

#crea la funcion ordenar
function ordenar ($tabla, $campo){
    foreach($tabla as $key => $nuevo){
        $aux[$key] = $nuevo[$campo];
    }
    array_multisort($aux, SORT_DESC, $tabla);
    return ($tabla);
}


function filtrar ($tabla, $expresion){

   $aux= array();

   foreach($tabla as $key => $campo){
       if(in_array($expresion, $campo)){

           $aux[]=$campo;
       }
    }
    return($aux);
}

function ultimoId ($tabla){
    $ultimo = end($tabla);
    return($ultimo['Id']);
}
?>