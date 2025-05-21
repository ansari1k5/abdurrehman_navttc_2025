<?php
$d = date("6"); // Get current day number (0 for Sunday through 6 for Saturday)

switch ($d) {
  case 0:
    echo "Today is Sunday";
    break;
  case 1:
    echo "Today is Monday";
    break;
  case 2:
    echo "Today is Tuesday";
    break;
  case 3:
    echo "Today is Wednesday";
    break;
  case 4:
    echo "Today is Thursday";
    break;
  case 5:
    echo "Today is Friday";
    break;
  case 6:
    echo "Today is Saturday";
    break;
  default:
    echo "Invalid day";
}
?>