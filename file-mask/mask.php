<?php

$reg_image = '/^IMG_[1-9]*\.(jpg|png|gif)$/';
$image_names = [
    "IMG_2.jpg",
    "IMG_2/jpg",
    "IMG_2.bmp",
    "IMG_84.png",
];

for ($i=0; $i < count($image_names); $i++) { 
    if (preg_match($reg_image, $image_names[$i], $matches))
        echo "$image_names[$i] - valid file";
    else
        echo "$image_names[$i] - invalid file";
    echo "\n";
    print_r($matches);
}

