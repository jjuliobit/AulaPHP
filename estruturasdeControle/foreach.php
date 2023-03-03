<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" name="OK">
</form>
<?php
// $meses = array(
//     "Janeiro", "Fevereiro","Março",
//     "Abril","Maio","Junho","Julho",
//     "Setembro", "Outubro", "Novembro",
//     "Dezembro",
// );

// foreach($meses as $key => $mes) {
//     echo "Indice: ".$key."<br>";
//     echo "O mês é: ".$mes. "<br><br>";
// }

if (isset($_GET)) {

    foreach ($_GET as $key => $value) {
        echo "Nome do campo: ". $key."<br>" ;
        echo "Valor do campo: " . $value;
        echo "<hr>";
    }

}
?>