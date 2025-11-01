<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "travelemangementsystem"; 

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $route = $_POST["route"];

    $sql = "INSERT INTO routes (route) VALUES ('$route')";

    if ($conn->query($sql) === TRUE) {
        echo "Route suggestion inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
