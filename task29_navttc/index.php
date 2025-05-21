<?php
// Get the current hour in 24-hour format
$hour = date("H");

if ($hour < 12) {
    echo "Good Morning";
} else {
    echo "Good Afternoon";
}
?>
