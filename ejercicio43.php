<?php
/**MANEJO DE ARCHIVO
 * En el siguiente ejemplo se realiza la lectura de un fichero remoto,
 * reemplazo alguna palabra y muestro el resultado
 */
//que alegria

echo "https://apcpruebas.es/imagenes/villano.gif";

 if(!$fp = fopen("https://www.google.com/index.html", "r")){
     print "Error al abrir el fichero";
     exit;
 }

 while(!feof($fp)){
     $linea = fgets($fp, 4096);
     $linea = str_replace("Google","Pandereta", $linea);
     $linea = str_replace("Voy a tener suerte", "Tu suerte en mis manos &#128520;", $linea);
     $linea = str_replace("avanzada", "sin resultados &#128527;", $linea);
     print $linea;
 }
 fclose($fp);