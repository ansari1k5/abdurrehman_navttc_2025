<?php
function sortArray($arr) {
    sort($arr);  // Sort the array in ascending order
    return $arr;
}

// Example usage:
$numbers = [5, 3, 8, 1, 2];
$sortedNumbers = sortArray($numbers);

print_r($sortedNumbers);
?>
