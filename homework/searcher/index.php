<?php
$words = "I felt happy because I saw the others were happy and because I knew I should feel happy, but I wasn’t really happy.";
$keywords = preg_split("/[\s,]+/", $words);

print_r(array_unique($keywords));