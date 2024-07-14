<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection details
    $hostname = 'localhost';
    $database = 'myquizgame';
    $dbUsername = 'root';
    $dbPassword = '';

    // Create a connection
    $connection = new mysqli($hostname, $dbUsername, $dbPassword, $database);

    // Check the connection
    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }

    // Prepare the SQL statement
    $query = "SELECT * FROM user WHERE name = '$username' AND password = '$password'";

    // Execute the query
    $result = mysqli_query($connection,$query);

    // Check if the query returned any rows
    if ($result->num_rows > 0) {
        // Successful login
        $_SESSION["username"] = $username; 
        echo"<script>window.location.href = 'subjects.php';</script>";
        echo "<script>console.log("+$_SESSION['username']+")</script>";
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid username or password. Please try again.');
        window.location.href = 'login.html';
        </script>";
    }

    // Close the connection
    $connection->close();
}

?>
