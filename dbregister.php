<?php
// Assuming the form fields are named 'firstName', 'lastName', 'email', 'phone', 'salary', and 'dob' in register.html
// Make sure to sanitize and validate user inputs to prevent SQL injection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate and sanitize inputs
$firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
$lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$salary = filter_var($_POST['salary'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$dob = filter_var($_POST['dob'], FILTER_SANITIZE_STRING);

if (!$firstName || !$lastName || !$email || !$phone || !$salary || !$dob) {
    die("Invalid input");
}

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO employee (firstName, lastName, email, phone, salary, dob) VALUES (?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die("Prepare failed: " . htmlspecialchars($conn->error));
}

$stmt->bind_param("ssssds", $firstName, $lastName, $email, $phone, $salary, $dob);

if ($stmt->execute() === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . htmlspecialchars($stmt->error);
}

$stmt->close();
$conn->close();
?>