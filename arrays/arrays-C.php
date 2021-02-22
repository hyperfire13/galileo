<?php
$colors = ['red', 'blue', 'black', 'red', 'blue', 'blue', 'red', 'gold'];
$colorsNotRepeating = [];

$colorsAndOccurence = array_count_values($colors);
$arrayKeys = array_keys($colorsAndOccurence);

$colorsAndOccurence = array_count_values($colors);
for ($i=0; $i < sizeof($colorsAndOccurence); $i++) {
    if ($colorsAndOccurence[$arrayKeys[$i]] === 1) {
        array_push($colorsNotRepeating, $arrayKeys[$i]);
    }
}
echo 'Display the item that is not repetitive.';
echo '<br>';
echo json_encode($colors);
echo '<br>';
echo '<br>';
echo 'note repeating items are:';
echo '<br>';
echo '<br>';

echo json_encode($colorsNotRepeating);
?>