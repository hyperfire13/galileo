<?php
$oddList = '';
$number = 0;

do {
    $remainder = $number % 2;
    if ($remainder > 0) {
        $oddList = $oddList . $number . "\n";
    }
    $number++;
} while ($number <= 10);
echo 'Create a PHP function using DO WHILE loop that will display all odd numbers from 0-10 : ';
echo '<br>';
echo '<br>';
echo 'Odd numbers from 0-10 are: '. $oddList;
?>