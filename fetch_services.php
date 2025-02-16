<?php
session_start();

// Ensure the user is logged in
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
    exit();
}

// Connect to database
$conn = mysqli_connect("localhost", "root", "", "bank");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get logged-in username
$username = $_SESSION['username'];

// Step 1: Get Account Number from users table
$query = "SELECT account_number FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);

if ($row = mysqli_fetch_assoc($result)) {
    $account_number = $row['account_number'];
} else {
    die("Error: Account number not found for user.");
}

// Step 2: Get Customer ID from accounts table
$query = "SELECT Customer_ID FROM accounts WHERE account_number = '$account_number'";
$result = mysqli_query($conn, $query);

if ($row = mysqli_fetch_assoc($result)) {
    $customer_id = $row['Customer_ID'];
} else {
    die("Error: Customer ID not found for account.");
}

// Step 3: Get Services from services table
$query = "SELECT * FROM services WHERE Customer_ID = '$customer_id'";
$result = mysqli_query($conn, $query);

$services = [];
while ($row = mysqli_fetch_assoc($result)) {
    $services[] = $row;
}

// Close connection
mysqli_close($conn);
?>
