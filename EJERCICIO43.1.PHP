<?php
/**
 * En el siguiente ejemplo se realiza la lectura de un fichero remoto,
 * reemplazo alguna palabra y muestro el resultado
 * elimino las etiquetas html
 */



 
 if(!$fp = fopen("https://www.google.com/index.html", "r")){
     print "Error al abrir el fichero";
     exit;
 }

 while(!feof($fp)){
     $linea = fgetss($fp, 4096);
     $linea = str_replace("Google","Pandereta", $linea);
     $linea = str_replace("Voy a tener suerte", "Tu suerte en mis manos &#128520;", $linea);
     $linea = str_replace("avanzada", "sin resultados &#128527;", $linea);
     print $linea;
 }
 fclose($fp);