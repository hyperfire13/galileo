<?php
$limit = 10;

for ($i=1; $i <=10 ; $i++) {
    $num1 = 5 * ($i * $i) + 4;
    $num2 = 5 * ($i * $i) - 4;
    if (sqrt($num1) === floor(sqrt($num1)) || sqrt($num2) === floor(sqrt($num2))) {
        echo $i . ' is a fibonacci number' . '<br>';
    } else {
        echo $i . ' is not a fibonacci number' . '<br>';
    }
}
?>