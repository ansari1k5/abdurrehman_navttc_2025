<?php
$students = [];

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];

    $students[] = [
        'fname' => $fname,
        'lname' => $lname,
        'city' => $city
    ];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Entry</title>
</head>

<body>
    <center>

        <h2>Add Student</h2>

        <form method="POST">
            First Name: <input type="text" name="fname" required><br><br>
            Last Name: <input type="text" name="lname" required><br><br>
            City: <input type="text" name="city" required><br><br>
            <input type="submit" name="submit" value="Add Student">
        </form>

        <hr>

        <h2>Student List</h2>

        <table border="2" cellpadding="10">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>City</th>
            </tr>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= $student['fname'] ?></td>
                    <td><?= $student['lname'] ?></td>
                    <td><?= $student['city'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

</body>

</html>