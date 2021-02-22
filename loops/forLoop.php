<?php
echo 'Create a PHP function using FOR loop that will display 10 numbers in fibonacci sequence :';
echo '<br>';
echo '<br>';
function fibonacci(){ 
    $num1 = 0; 
    $num2 = 1; 

    for ($counter=0; $counter < 10; $counter++) { 
        echo ' '.$num1; 
        $num3 = $num2 + $num1; 
        $num1 = $num2; 
        $num2 = $num3; 
    }
}
fibonacci(); 
?>