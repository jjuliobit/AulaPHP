<?php

$dir1 = 'foler_01';
$dir2 = 'foler_02';
if (!is_dir($dir1))
    mkdir($dir1);
if (!is_dir($dir2))
    mkdir($dir2);

$filename = "READE.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {

    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

    fwrite($file, date("Y-m-d H:i:s"));

    fclose($file);
}

rename(
    $dir1 . DIRECTORY_SEPARATOR . $filename, // Origem
    $dir2 . DIRECTORY_SEPARATOR . $filename // Destino
);
echo "Arquivo foi movido com sucesso"
?>