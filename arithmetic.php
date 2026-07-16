<?php
$number1 = 10;
$number2 = 20;
$number3 = 30;
$number4 = 40;

$sum = $number1 + $number2;
$diff = $number3 - $number2;
$prod = $number1 * $number4;
$div = $number4 / $number2;
$total = $sum + $diff + $prod + $div;
$average = $total / 4;

echo "The sum of $number1 and $number2 is ".$sum."."."<br>";
echo "The difference between $number3 and $number2 is ".$diff."."."<br>";
echo "The product of $number1 and $number4 is ".$prod."."."<br>";
echo "The division of $number4 by $number2 is ".$div."."."<br>";
echo "The total of all results is ".$total."."."<br>";
echo "The average of all result is ".$average."."."<br>";
?>