<?php
$number = 5; // You can change this to any positive integer
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "Factorial of $number is: $factorial";
?>
