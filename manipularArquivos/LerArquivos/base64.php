<?php 

$filename = 'logo.png';

$base64 = base64_encode( file_get_contents($filename));


$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileinfo -> file($filename);
$base64enconde = "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?=$base64enconde?>" target="_blank">Link para imagem</a>
<img src="<?=$base64enconde?>">