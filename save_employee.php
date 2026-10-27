<?php

include "db.php";

$employee_name = $_POST['employee_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$designation = $_POST['designation'];
$salary = $_POST['salary'];
$joining_date = $_POST['joining_date'];

$sql = "INSERT INTO employees
        (employee_name, email, phone, department, designation, salary, joining_date)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "ssssdds",
    $employee_name,
    $email,
    $phone,
    $department,
    $designation,
    $salary,
    $joining_date
);

if ($stmt->execute()) {

    echo "<h2>Employee Saved Successfully!</h2>";
    echo "<a href='index.php'>Add Another Employee</a><br>";
    echo "<a href='employees.php'>View Employees</a>";

} else {

    echo "Error: " . $stmt->error;

}

$stmt->close();
$conn->close();

?>