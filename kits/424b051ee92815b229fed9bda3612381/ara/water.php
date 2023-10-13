<?php
$percentage = 0.15;

// Path the the requested file
$path = $_GET['image'];

// Load the requested image
$image = imagecreatefromstring(file_get_contents($path));

$w = imagesx($image);
$h = imagesy($image);

// Load the watermark image
$watermark = imagecreatefrompng('style/img/water.png');
$ww = 200;
$wh = 50;

// Merge watermark upon the original image
imagecopy($image, $watermark, $w-$ww, $h-$wh, 0, 0, $ww, $wh);

// Spool the image in the original format
eregi('\.(gif|jpeg|jpg|png)$',$path,$regs);
switch( $regs[1] )
{
        case 'gif':
                header('Content-type: image/gif');
                imagegif($image);
                break;
        case 'jpg':
        case 'jpeg':
                header('Content-type: image/jpeg');
                imagejpeg($image);
                break;
        case 'png':
                header('Content-type: image/png');
                imagepng($image);
                break;
}
exit();
?>