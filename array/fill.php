<?php

//Заповнення масиву значеннями

$start=0;
$count=5;
$value='PHP';
$result=array_fill($start,$count,$value);

//Вивід нового масиву
echo '<pre>';
print_r($result);
echo '</pre>';