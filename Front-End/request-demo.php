<?php
// Database connection
$servername = "localhost";
$username = "root";        // change if your MySQL has a different username
$password = "";            // change if you use a MySQL password
$dbname = "agritrack";     // your database

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// Get and sanitize POST data
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

// Insert into database
$sql = "INSERT INTO demo_requests (name, email, message)
        VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>✅ Thank you, $name! Your demo request has been received.</h2>";
} else {
    echo "❌ Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
