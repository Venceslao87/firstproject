<?php

/**
 * Сортування масивів
 * 
 * sort — сортування в порядку возрастання.
 * 
 * ksort — сортування за ключем
 * asort — сортування за значенням
 * 
 * ksort та asort — сортування відбувається таким чином,
 * що зберігається відношення між ключем та значенням.
 * */

 $fruits = [
    'd'=> 'lemon',
    'a'=> 'orange',
    'b'=> 'banana',
    'c'=> 'apple'
 ];
 ksort($fruits);
 echo "<pre>";
 print_r($fruits);
 echo "</pre>";