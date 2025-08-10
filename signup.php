<?php
include 'Payment2.html';

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
    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $cnic = $_POST["cnic"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $city = $_POST["city"];

    // Insert the form data into the database
    $sql = "INSERT INTO signup (`name`, `password`, `email`, `cnic`, `address`, `contact`, `city`) VALUES ('$name', '$password', '$email', '$cnic', '$address', '$contact', '$city')";

    if ($conn->query($sql) == TRUE) {
        echo "Tour plan submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
