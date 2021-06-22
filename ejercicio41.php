<?php
/**
 * Crea un array con el nombre de varias frutas.
 * Muestra el array en pantalla ordenado alfabéticamente en orden creciente y después en orden decreciente
 */

 $frutas = ["pera", "manzana", "sandía", "melocotón", "piña", "cereza"];
 echo "<p>Array sin ordenar</p>";
 echo mostrarArray($frutas);
 //ordeno el array en orden creciente con sort
 sort($frutas);
 echo "<p>Array ordenado</p>";
 echo mostrarArray($frutas);

 rsort($frutas);
 echo "<p>Array ordenado en orden decreciente</p>";
 echo mostrarArray($frutas);

 //elimino la manzana
 unset($frutas[4]);
 echo "<p>Array sin manzana</p>";
 echo mostrarArray($frutas);

/**
 * Crea un array asociativo con varios valores con la clave de una especie de animales  y valor un animal. Ejemplo: ave => paloma
 * Muestra el array en pantalla ordenado alfabéticamente en orden creciente y después en orden decreciente
 * Elimina un elemento del array y vuelve a mostrarlo
 */

 //las claves de un array asociativo no pueden contener tildes ni ñ ni otros carácteres especiales

 $animales = [
    "ave" => "paloma",
    "pez" => "tiburón",
    "reptil" => "lagarto",
    "mamifero" => "león"
 ];

 echo "<p>Array asociativo sin ordenar</p>";
 echo mostrarArray($animales);

 asort($animales);
 echo "<p>Array asociativo ordenado</p>";
 echo mostrarArray($animales);

 arsort($animales);
 echo "<p>Array asociativo ordenado en orden decreciente</p>";
 echo mostrarArray($animales);

 //elimino al lagarto
 unset($animales['reptil']);
 echo "<p>Array asociativo sin el lagarto</p>";
 echo mostrarArray($animales);


 function mostrarArray($array){
     //print_r($array);
     $texto = "<hr>";
     foreach($array as $clave => $valor){
        $texto.= "{$clave} : {$valor} <br>";
     }
     $texto .= "<hr>";
     $texto = $texto . "<hr>";
     return $texto;
 }