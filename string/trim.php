<?php
// Видалення символів або пробілів зі строки.
$str='-----Це деякий приклад з пробілом---';

$result=rtrim($str, '-');

echo "<pre>";
echo $str;
echo '<br>';
echo $result;
echo "</pre>";