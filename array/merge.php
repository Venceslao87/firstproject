<?php

//  Об'єднання масиву
$num = [1,2,3,4,5];
$letter = ['a','b','c','d','e'];

$result = array_merge($num,$letter);

echo "<pre>";
print_r($result);
echo "</pre>";