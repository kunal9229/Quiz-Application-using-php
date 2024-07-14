<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    if ($password !== $confirmPassword) {
        echo "<script>alert('Passwords do not match.');
        window.location.href = 'signup.html';
        </script>";
    } elseif (strlen($password) < 8 ||
        !preg_match("/[A-Z]/", $password) ||
        !preg_match("/[!@#$%^&*()\-_=+{};:,<.>]/", $password) ||
        !preg_match("/[0-9]/", $password)) {
        echo "<script>alert('Password should be at least 8 characters long and contain at least one uppercase letter, one special character, and one numeric value.');
        window.location.href = 'signup.html';
        </script>";
    } elseif (strlen($mobile) != 10 || !is_numeric($mobile)) {
        echo "<script>alert('Invalid mobile number. Please enter a 10-digit numeric value.');
        window.location.href = 'signup.html';
        </script>";
    } else {
        $hostname = 'localhost';
        $database = 'myquizgame';
        $username = 'root';
        $dbPassword = '';

        $connection = new mysqli($hostname, $username, $dbPassword, $database);

        if ($connection->connect_error) {
            die('Connection failed: ' . $connection->connect_error);
        }

        // Check for duplicate user
        $duplicateQuery = "SELECT * FROM user WHERE email = '$email'";
        $duplicateResult = $connection->query($duplicateQuery);
        if ($duplicateResult->num_rows > 0) {
            echo "<script>alert('User with this email already exists.');
            window.location.href = 'signup.html';
            </script>";
        } else {
            // Insert the user into the database
            $query = "INSERT INTO user (name, mobile, email, password) VALUES ('$name', '$mobile', '$email', '$password')";

            if ($connection->query($query) === true) {
                header("Location: login.html?success=registered");
                exit;
            } else {
                echo "Error: " . $query . "<br>" . $connection->error;
            }
        }

        // Close the connection
        $connection->close();
    }
}
?>
