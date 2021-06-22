<?php
/**MANEJO DE CADENA
 * Crea un array cuyos valores sean cada una de las palabras de la variable $cadena
 * $cadena = “uno, dos, tres, cuatro, cinco”;
 * Vuelve a crear una cadena con los elementos del array pero esta vez que estén separados por un guion –
 */

$cadena = "uno, dos, tres, cuatro, cinco";

//array a partir de la cadena
$arrayCadena = explode(",", $cadena);

print_r($arrayCadena);

//cadena a partir de un array
$cadenaDeArray = implode("-", $arrayCadena);

echo "<p>$cadenaDeArray</p>";

/**
 * Crea una variable que contenga un texto.
 * Reemplaza todas las o de la variable anterior por a
 */

 $texto = "En un lugar de la mancha de cuyo nombre no quiero acordarme";
 echo "<p>$texto</p>";
 $textoConA = str_replace("o", "a", $texto);
 echo "<p>$textoConA</p>";

 /**
  * Dado un array con el siguiente contenido:
  * Texto1.txt, imagen1.jpg, icono.jpg, notas.txt, carrito.gif, editar.gif, preferencias.txt, virus.exe
  * Crea dos arrays $documentos e $imagenes de modo que uno contenga los nombres de los archivos de texto y el otro las imágenes.
  */

  $archivos = ["texto1.txt", "imagen1.jpg", "icono.jpg", "notas.txt", "carrito.gif", "editar.gif", "preferencias.txt", "virus.exe"];

  $documentos = array();
  $imagenes = array();

  foreach($archivos as $archivo){
      $punto = strpos($archivo, ".");
      $extension = substr($archivo, $punto, strlen($archivo));

      //echo "$punto $extension <br>";
      if($extension == ".txt" || $extension == ".doc"){
          array_push($documentos, $archivo);
      }else if($extension == ".jpg" || $extension == ".gif"){
          array_push($imagenes, $archivo);
      }
  }

  echo "<hr>";
  echo "<h1>Todos los archivos</h1>";
  foreach($archivos as $archivo){
      echo "$archivo <br>";
  }

  echo "<hr>";
  echo "<h1>Documentos</h1>";
  foreach($documentos as $documento){
      echo "$documento <br>";
  }

  echo "<hr>";
  echo "<h1>Imágenes</h1>";
  foreach($imagenes as $imagen){
      echo "$imagen <br>";
  }