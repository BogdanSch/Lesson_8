<?php

// $r_phone = '/^(\d{3}|\d{2})-?\d{2}-?\d{2}$/';
// $phone = "783-51-37";

// if (preg_match($r_phone, $phone, $matches))
//     echo "$phone - правильний телефон";
// else
//     echo "$phone – неправильний телефон";

$str = "Іванов та Петров, а також інший Іванов";
$r = "/Іванов|Петров/";
if (preg_match_all($r, $str, $arr))
    print_r($arr);

//Alternative
$r_dom = '/\w+\.(com|org|ua)/';
$dom = "fdsfg.ua";

if (preg_match($r_dom, $dom, $matches))
    echo "$dom - correct";
else
    echo "$dom – invalid";

echo "\n";
print_r($matches);