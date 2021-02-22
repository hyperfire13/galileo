<?php
$number = 0;
$sum = 0;

while ($number <= 10) {
    $remainder = $number % 2;
    if ($remainder === 0) {
        $sum += $number;
    }
    $number++;
}
echo 'Create a PHP function using WHILE loop that will sum all even numbers from 0-10 :';
echo '<br>';
echo '<br>';
echo 'The sum of all even numbers from 0 to 10 is: ' . $sum;
?>