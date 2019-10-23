<?php

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
            "Titulo" => "Los Señores del tiempo",
            "Autor" => "Garcia Senz de Urturi",
            "Editorial" => "Anaya",
            "Género" => "Novela",
            "Precio" => "19.5€"
        ],
        [
            "Id" => "2",
            "Titulo" => "El Rey Recibe",
            "Autor" => "Eduardo Mendoza",
            "Editorial" => "Ariel",
            "Género" => "Novela",
            "Precio" => "20.5€"
        ],
        [
            "Id" => "3",
            "Titulo" => "Diario de una mujer",
            "Autor" => "Eduardo Mendoza",
            "Editorial" => "Santillana",
            "Género" => "Juvenil",
            "Precio" => "12.95€"
        ],
        [
            "Id" => "4",
            "Titulo" => "El Quijote de la Mancha",
            "Autor" => "Miguel de Cervantes",
            "Editorial" => "Planeta",
            "Género" => "Novela",
            "Precio" => "15.95€"
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