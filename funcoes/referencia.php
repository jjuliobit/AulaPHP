<?php

// $a = 10;

// function trocadeValor(&$b) {
//     $b += 50;
//     return $b;
// }

// echo trocadeValor($a);
// echo '<br>';
// echo $a;
// echo trocadeValor($a);
// echo '<br>';
// echo $a;


$pessoa = array(
    'nome' => 'joão',
    'idade' => 20
);

foreach($pessoa as &$value) {
    if(gettype($value) === 'interger') $value += 10;
    echo $value. '<br>';
}

print_r($pessoa);

?>