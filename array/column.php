<?php

/**
 * Повернення масиву із значень одного стовпчика вхідного масиву
 */

 $record = [
    [
        'first_name'=>'Andriy',
        'last_name'=> 'Shevchenko',
 ],
 [
    'first_name'=>'Sergiy',
    'last_name'=>'Rebrov',
 ]
 ];

 $name=array_column($record,'first_name');
 echo "<pre>";
 print_r($name);
 echo "</pre>";