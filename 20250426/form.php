<?php 
$num1 = $_GET['no1'];
$num2 = $_GET['no2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="no1">
        <input type="text" name="no2">
        <input type="submit" value="submit">
    </form>
    <hr>
    <p>Additon: = <?= $num1 + $num2 ?></p>
    <p>Subtraction: = <?= $num1 - $num2 ?></p>
    <p>Multiplication: = <?= $num1 * $num2 ?></p>
    <p>Division: = <?= $num1 / $num2 ?></p>
</body>
</html>