<?php

$reg_image = '/^[images\/\]IMG_[0-9]*\.(jpg|png|gif)$/';
$image_names = [
    "images/IMG_2.jpg",
    "images/IMG_2/jpg",
    "images/IMG_2.bmp",
    "images/IMG_84.png",
];

for ($i=0; $i < count($image_names); $i++) { 
    if (preg_match($reg_image, $image_names[$i], $matches))
        echo "$image_names[$i] - valid file";
    else
        echo "$image_names[$i] - invalid file";
    echo "\n";
    print_r($matches);
}

