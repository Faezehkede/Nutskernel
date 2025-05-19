<?php
// 1. DB Config
$host = "localhost";
$dbname = "your_database";
$username = "your_username";
$password = "your_password";

// 2. Form Inputs
$category = $_POST['category'];
$type = $_POST['type'];
$quantity = $_POST['quantity'];

// 3. Save to DB
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO requests (category, type, quantity) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $category, $type, $quantity);
$save_success = $stmt->execute();
$stmt->close();
$conn->close();

// 4. Email Settings
$to = "your@email.com"; // Replace with your email
$subject = "New Product Inquiry Submitted";
$headers = "From: no-reply@yourdomain.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$body = "A new product request has been submitted:\n\n";
$body .= "Category: $category\n";
$body .= "Type: $type\n";
$body .= "Quantity (kg): $quantity\n";

$mail_success = mail($to, $subject, $body, $headers);

// 5. Result
if ($save_success && $mail_success) {
    echo "Thank you! Your request has been submitted.";
} else {
    echo "There was an error. Please try again.";
}
?>
