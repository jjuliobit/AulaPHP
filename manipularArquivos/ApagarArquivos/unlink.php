<?php 
$file = fopen('test.txt', 'w+');
fclose($file);

unlink('test.txt');

echo 'Arquivo foi removido com sucesso!'
?>