<?php

/**
 * Форматування строки
 * 
 * — %s – розглядається як строка
 * — %d – розглядається як ціле число
 * – %f – розглядається як число з плаваюючою точкою
 */

 $name = 'Микола';
 $age = 35.5;
 $height= 185.66;
 $res=sprintf('Мого друга зовуть %s, йому %d років. Його зріст %.2f см.', $name, $age,$height);
 // Вивод відформованої строки.
 echo $res;