<?php

$num1 = filter_input(INPUT_POST, 'num1');
$num2 = filter_input(INPUT_POST, 'num2');

echo "$num1 y $num2 <br>" ;
//echo $num1 .'y'. $num2;


$suma = $num1 + $num2;

echo "$suma";

?>