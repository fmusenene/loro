<?php
// Retrieve the data from $_POST
$amount = $_POST['amount'];
$duration = $_POST['duration'];
$repayment = $_POST['repayment'];
$name = $_POST['name'];
$phone = $_POST['phone'];

// Validate the data
if (!is_numeric($amount) || $amount <= 0) {
    die("Invalid amount");
}

if (!is_numeric($duration) || $duration <= 0) {
    die("Invalid duration");
}

if (!is_numeric($repayment) || $repayment <= 0) {
    die("Invalid repayment");
}

if (empty($name)) {
    die("Name is required");
}

if (empty($phone) || !preg_match('/^\d{10}$/', $phone)) {
    die("Invalid phone number");
}

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the query
$sql = "INSERT INTO loan_info (amount, duration, repayment, name, phone) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iiiss", $amount, $duration, $repayment, $name, $phone);

if ($stmt->execute()) {
    // Close the connection
    $stmt->close();
    $conn->close();

    // Redirect to index page
    header("Location: index.php");
    exit();
} else {
    die("Error saving loan information: " . $stmt->error);
}
?>
