<?php
header("Content-Type: image/jpeg");

$file = "wallpaper.jpg";

$new_witdh = 265;
$new_height = 265;


$witdh = $data[0];
$height = $data[1];

list($old_witdh, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_witdh, $new_height);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_witdh, $new_height, $old_height, $old_witdh);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);
?>