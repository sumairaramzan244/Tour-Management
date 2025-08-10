

<?php
include 'login.html';
include 'signup.html';
include 'q7.html';
// Replace with your database credentials
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

// Check if the user has finalized a plan (you can customize this check)
if (isset($_POST['finalize_plan'])) {
    $user_id = $_SESSION['user_id']; // You should have a user authentication system
    $plan_name = $_POST['budget'];
    $destination = $_POST['days'];
    $departure_date = $_POST['name'];
    $return_date = $_POST['password'];
    $total_cost = $_POST['email'];
    $booking_reference = $_POST['city'];

    // Insert the finalized plan data into the table
    $sql = "INSERT INTO finalized_plans (user_id, budget, days, name,password, email, destination) VALUES ('$user_id', '$plan_name', '$destination', '$departure_date', '$return_date', '$total_cost', '$booking_reference')";

    if ($conn->query($sql) === TRUE) {
        echo "Plan finalized and data stored successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
