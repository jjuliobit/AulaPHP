<?php
#Pasta
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

?>