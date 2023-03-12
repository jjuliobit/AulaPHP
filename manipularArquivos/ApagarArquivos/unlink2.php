<?php
# Essa aqui não funciona no windows e pede permissão, mas no linux funciona normalmente #
$pasta = 'imagens';
if (!is_dir($pasta))
    mkdir($pasta);

foreach (scandir($pasta) as $item) {
    if (in_array($item, array('.', '..'))) {
        // chmod('imagens' . $item, 0777);
        unlink($pasta . $item);

    }

    echo 'OK';

}


    // caminho do arquivo a ser excluído
    $file = 'C:\xampp\htdocs\manipularArquivos\ApagarArquivos\imagens\1.png';

    // verifica se o arquivo existe antes de excluí-lo
    if (file_exists($file)) {
        // tenta excluir o arquivo
        if (unlink($file)) {
            echo "Arquivo excluído com sucesso.";
        } else {
            echo "Falha ao excluir o arquivo.";
        }
    } else {
        echo "O arquivo não existe.";
    }


// caminho da pasta
$folder = 'C:\xampp\htdocs\manipularArquivos\ApagarArquivos\imagens';
// encontra um arquivo na pasta
$files = scandir($folder);


foreach($files as $file) {
    // verificando uns arquivos pela extensão
    if(pathinfo($file, PATHINFO_EXTENSION) == 'jpg' || pathinfo($file, PATHINFO_EXTENSION) == 'png' ) {
        unlink($folder . '/' . $file); // vai apagar os arquivos .png ou .jpg
         echo 'Arquivos foram apagados';
    }
} 


?>
