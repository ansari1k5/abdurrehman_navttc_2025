<?php 
$num1 = "15";
$num2 = "5";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20250418</title>
    <style>

    </style>
</head>
<body>
    <div class="container">
        <table>
        <thead>
        <th>Price</th>
        <th>Tax</th>
        <th>Total</th>
    </thead>
        <tbody>
            <tr>
                <td><?php echo $num1; ?></td>
                <td><?php echo $num2; ?></td>
                <td><?php echo $num1 + $num2; ?></td>
            </tr>
        </tbody>
        </table>
    </div>
</body>
</html>