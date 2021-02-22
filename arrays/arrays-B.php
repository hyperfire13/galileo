<?php
$array = [9863, 7127, 2020, 80, 131, 55, 100];
$roundedList = [];

sort($array);
$roundedList = $array;
for ($i=0; $i < sizeof($roundedList); $i++) {
    $remainder = $roundedList[$i] % 2; 
    if ($remainder > 0) {
        $roundedList[$i] = round($roundedList[$i], -1);
    }
}
echo 'Sort the array in ascending order; if the value is an odd number, round it up to nearest tens.';
echo '<br>';
echo 'list of numbers :';
echo '<br>';
echo json_encode($array);
echo '<br>';
echo '<br>';
echo 'result :';
echo json_encode($roundedList);
?>