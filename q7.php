<?php
include 'signup.html';
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
    $budget = $_POST["budget"];
    $days = $_POST["days"];
    $city = $_POST["city"];

    // Insert the form data into the database
    $sql = "INSERT INTO travel_plans(budget, days, selected_city) VALUES ('$budget', '$days', '$city')";

    if ($conn->query($sql) === TRUE) {
        echo "Tour plan submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
