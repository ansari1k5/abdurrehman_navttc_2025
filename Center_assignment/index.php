<?php
// Initialize an empty array to hold the user input
$students = [];

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get the data from the input fields
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];

    // Add the input data to the $students array
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

<h2>Add Student</h2>

<!-- Form to accept user input -->
<form method="POST">
    First Name: <input type="text" name="fname" required><br><br>
    Last Name: <input type="text" name="lname" required><br><br>
    City: <input type="text" name="city" required><br><br>
    <input type="submit" name="submit" value="Add Student">
</form>

<hr>

<h2>Student List</h2>

<!-- Table to display the entered data -->
<table border="1" cellpadding="10">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>City</th>
    </tr>

    <?php
    // Display all students in the $students array
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($student['fname']) . "</td>";
        echo "<td>" . htmlspecialchars($student['lname']) . "</td>";
        echo "<td>" . htmlspecialchars($student['city']) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
