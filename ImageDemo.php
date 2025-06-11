<?php
    $im = imagecreate(1500,1300);

    $bg = imagecolorallocate($im,255,255,255);
    $textcolor = imagecolorallocate($im,25,100,255);

    imagestring($im,7,150,150,'Hello World!',$textcolor);
    header("Content-type:image/png");

    imagepng($im);
    imagedestroy($im);
?>