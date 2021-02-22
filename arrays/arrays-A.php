<?php
$array = ["Marvin", "Marvin", "Marco", "Marvin", "Marco", "Marco", "Christian"];
$elementsToBeRemoved = [];

// count the number of occurence of each element
$namesAndOccurence = array_count_values($array);
// arrange alphabetically based on the value
asort($namesAndOccurence);
// create an array then store the keys
$arrayKeys = array_keys($namesAndOccurence);

// compare all the occurence of each name to each other
for ($i=0; $i < sizeof($namesAndOccurence); $i++) {
    for ($j=0; $j < sizeof($namesAndOccurence); $j++) {
        // if the number of occurence is less than to other, include in the list to be removed
        if ($namesAndOccurence[$arrayKeys[$i]] < $namesAndOccurence[$arrayKeys[$j]]) {
            array_push($elementsToBeRemoved, $arrayKeys[$i]);
            break;
        }
    }
}
// remove the names
$namesWithHighOccurence = array_diff($arrayKeys, $elementsToBeRemoved);
// arrange alphabetically
sort($namesWithHighOccurence);
$highestNumberOfOccurence = array_slice($namesWithHighOccurence,0,1);
echo 'Display the value that have the most number occurrence; in case of tie arrange it in alphabetical order.';
echo '<br>';
echo '<br>';
echo 'list of names: ' . json_encode($array);
echo '<br>';
echo '<br>';
echo 'The name with highest number of occurence is: ' .  $highestNumberOfOccurence[0];
?>