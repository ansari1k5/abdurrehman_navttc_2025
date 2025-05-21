<?php
$dogname = $_GET['dnam'];
$dogcolor = $_GET['dcol'];

require 'classes/Animal.php';

$dog = new Animal();
$dog->name = $dogname;
$dog->color = $dogcolor;
$dog->petMe();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop</title>
</head>
<body>
    <form action="" method="get"> 
 <input type="text" name="dnam" placeholder="Enter your dog name">       
 <input type="text" name="dcol" placeholder="Enter your dog color">       
 <input type="submit">
    </form>
</body>
</html>