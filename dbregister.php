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

// Escape user inputs for security
$firstName =$_POST['firstName'];
$lastName =$_POST['lastName'];
$email = $conn->$_POST['email'];
$phone = $conn->$_POST['phone'];
$salary = $conn->$_POST['salary'];
$dob = $conn->$_POST['dob'];

// Insert data into employee table
$sql = "INSERT INTO employee (firstName, lastName, email, phone, salary, dob) VALUES ('$firstName', '$lastName',
'$email', '$phone', '$salary', '$dob')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>