<?php

function convertImageToWebP($source, $destination, $quality = 80)
{
    $extension = pathinfo($source, PATHINFO_EXTENSION);
    if ($extension == 'jpeg' || $extension == 'jpg')
        $image = imagecreatefromjpeg($source);
    elseif ($extension == 'gif')
        $image = imagecreatefromgif($source);
    elseif ($extension == 'png')
        $image = imagecreatefrompng($source);
    return imagewebp($image, $destination, $quality);

}
