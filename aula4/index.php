<?php
//escopo de variavel

$nome = "Glaucio";
function teste() {
    global $nome;
    echo $nome. "<br>";
}

function teste2() {
    $nome = "João";
    echo $nome. "<br>" . "agora no teste2";
}

teste();
teste2();

?>
