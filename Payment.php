<?php
// Replace these with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "tour_manage_system";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardNumber = $_POST["card_number"];
    $expiryDate = $_POST["expiry_date"];
    $cvv = $_POST["cvv"];
    $nameOnCard = $_POST["name"];
    $amount = $_POST["amount"];

    // Insert payment information into the payments table
    $sql = "INSERT INTO payments (card_number, expiry_date, cvv, name_on_card, amount) VALUES ('$cardNumber', '$expiryDate', '$cvv', '$nameOnCard', '$amount')";

    if ($conn->query($sql) === TRUE) {
        // Payment data inserted successfully
        echo "Congratulations! Your payment is submitted successfully, and your plan is finalized.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
