<?php
if (!is_dir('imagens'))
    mkdir('imagens');

foreach (scandir('imagens') as $item) {
    if (in_array($item, array('.', '..'))) {
        // chmod('imagens' . $item, 0777);
        unlink('imagens' . $item);

    }

    echo 'OK';

}


?>