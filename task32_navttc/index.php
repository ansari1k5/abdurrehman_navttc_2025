<?php
$rows = 8; // total number of rows
$i = 1;

while ($i <= $rows) {
    $j = 1;
    while ($j <= $i) {
        echo "*";
        $j++;
    }
    echo "<br>";
    $i++;
}
?>
