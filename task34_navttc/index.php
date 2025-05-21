<?php
// Step 1: Original array of month names
$months = ["January", "February", "March", "April", "May", "June"];

// Step 2: Value to be deleted
$deleteValue = "March";

// Step 3: New array to hold filtered values
$filteredMonths = [];

foreach ($months as $month) {
    if ($month !== $deleteValue) {
        $filteredMonths[] = $month; // Add to new array if it’s not the one to delete
    }
}

// Display the filtered array
echo "Months after removing '$deleteValue':<br>";
foreach ($filteredMonths as $month) {
    echo $month . "<br>";
}
?>
