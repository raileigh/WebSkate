<?php
header('Content-Type: text/html; charset=UTF-8');
// Abro el txt noticias
$noticias = fopen("noticias.txt", "r");
// Recorro todo el txt
while (!feof($noticias)) {
    $linea = fgets($noticias);
    // Guardo cada línea en un array
    $array_palabras = explode("#", $linea);
    // Pinto el array
    foreach ($array_palabras as &$trozos) {
        echo "<span>" . $trozos . " " . "</span>";
    }
    echo "<br>";
}
// Cierro el archivo
fclose($noticias);

