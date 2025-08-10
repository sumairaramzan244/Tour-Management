<?php
include 'q7.html';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "tour_manage_system"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST["email"];
    $enteredPassword = $_POST["password"];

    // Perform a SELECT query to retrieve the stored password for the entered email
    $sql = "SELECT password FROM user_login WHERE Email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row["password"];

        // Compare the entered password with the stored password
        if ($enteredPassword === $storedPassword) {
            echo '<script>alert("Password is correct. You are logged in!");</script>';
            // Add code to redirect the user to a logged-in page here if needed
        } else {
            echo '<script>alert("Incorrect password. Please try again.");</script>';
            // The page will stay on the login page
            
        }
    } else {
        // If email not found, it's the first time the user logs in
        // Insert the user's data into the database
        $insertSql = "INSERT INTO user_login (Email, password) VALUES ('$email', '$enteredPassword')";
        
        if ($conn->query($insertSql) === TRUE) {
            echo "Account created and logged in!";
            // Add code to redirect the user to a logged-in page here if needed
            header("Location: q7.html");
        } else {
            echo "Error creating account: " . $conn->error;
        }
    }

    $conn->close();
}
?>
