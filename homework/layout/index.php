<?php

$layout = 
"<p>Права користувачів:</p>
<ul>
  <li>Administrator</li>
  <li>Editor</li>
  <li>Subscriber</li>
</ul>";
$reg = "#<li>\w+\</li>#";

if (preg_match_all($reg, $layout, $arr))
    print_r($arr);

for ($i=0; $i < count($arr[0]); $i++) { 
  $role = strip_tags($arr[0][$i]);
  $layout = str_replace($arr[0][$i], "<li><a href=\"http://www.php.kh.ua/script.php?role=$role\">$role</a></li>", $layout);
}

print $layout;