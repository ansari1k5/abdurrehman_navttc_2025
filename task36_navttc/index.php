<?php
function isAllLowercase($str) {
    // Compare the string with its lowercase version
    return $str === strtolower($str);
}

// Example usage:
$test1 = "hello world";
$test2 = "Hello World";

echo isAllLowercase($test1) ? "True\n" : "False\n";  // Outputs: True
echo isAllLowercase($test2) ? "True\n" : "False\n";  // Outputs: False
?>
