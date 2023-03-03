<?php 

Class Pessoa {
    public $nome;
    public function falar() {
        return "O meu nome é ". $this->nome;
    }
}


$julia = new Pessoa();
$julia -> nome = 'Juliana.';
echo $julia ->falar();
?>