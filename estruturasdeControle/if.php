<?php
$suaIdade = 20;
$idadeKid = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($suaIdade < $idadeKid) {
    echo "Criança";
} elseif ($suaIdade < $idadeMaior) {
    echo "Adolecente";
} elseif($suaIdade < $idadeMelhor) {
   echo "Adulto"; 
} else {
    echo "idoso";
}

echo "<br>";

echo ($suaIdade < $idadeMaior)?"Menor de idade": "Maior de idade";

?>