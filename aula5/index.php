<?php
// Os operadores do PHP

// $nome = "Julia";
// echo $nome . " mais alguma coisa<br>";
// $nome .= " Treinamentos";
// echo $nome;


/////////////////////////////////

// $valorTotal = 0;
// $valorTotal +=100;
// $valorTotal += 25;
// $valorTotal *= .9;
// echo $valorTotal;

////////////////////////////////
// $a = 10;
// $b = 2;
// echo $a + $b;
// echo "<br>";
// echo $a * $b;
// echo "<br>";
// echo $a / $b;
// echo "<br>";
// echo $a - $b;
// echo "<br>";
// echo $a % $b;
// echo "<br>";
// echo $a ** $b;
//////////////////////////////////
// $a = 55.0;
// $b = 55;

// var_dump($a > $b);
// echo "<br>";
// var_dump($a < $b);
// echo "<br>";
// var_dump($a == $b);
// echo "<br>";
// var_dump($a === $b);
// echo "<br>";
// var_dump($a != $b);
////////////////////////////////////
// $a = 35;
// $b = 60;
// var_dump($a <=> $b);
///////////////////////////////////


$a = null;
$b = 8;
$c = 10;
echo $a ?? $b ?? $c;
?>