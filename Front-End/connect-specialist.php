<?php
// Log interest to the database (optional)
$servername = "localhost";
$username = "root";
$password = "";
$database = "agritrack";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO demo_requests (name, email, message)
        VALUES ('Anonymous', 'demo-interest@agritrack.com', 'Clicked Request Demo')";

$conn->query($sql);
$conn->close();

// Redirect to contact/support page or thank you
header("Location: support.html");
exit();
?>
