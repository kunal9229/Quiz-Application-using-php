<?php
    session_start();
    $username = $_SESSION["username"];
    if(!$username){
        echo "<script>alert('Session Timed Out! Please Login Again.');
        window.location.href = 'login.html';
        </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Quiz Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url("images/quiz.jpg");
            background-size: cover;
            background-position: center;
        }
        
        header {
            padding: 20px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h1 {
            margin: 0;
            color: white;
            background-color:red;
        }

        h2 {
            padding: 20px;
            text-align: center;
            color: white;
            
        }

        ul {
            list-style-type: none;
            margin: 20px auto;
            padding: 50px;
            width: 400px;
            text-align: center;
        }

        li {
            border-bottom: 5px;
            text-align: center;
            padding: 10px;
        }

        li a {
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            background-color: black;
        }

        li a:hover {
            background-color: red;
        }

        .logout-button {
            color: white;
            background-color: red;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php
    $hostname = 'localhost';
    $database = 'myquizgame';
    $dbUsername = 'root';
    $dbPassword = '';

    $connection = new mysqli($hostname, $dbUsername, $dbPassword, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT name FROM user where name = '$username'";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row["name"];
        echo '<header>
                <h1>Welcome ',$name,'</h1>

                <a class="logout-button" href="logout.php">Logout</a>
              </header>';
    }

    $connection->close();
    ?>
    
    <h2>CHOOSE SUBJECT AS PER YOUR CHOICE</h2>

    <ul>
        <li><a href="dsaquiz.php">DATA STRUCTURES AND ALGORITHM</a></li>
        <li><a href="pythonquiz.php">PYTHON QUIZ</a></li>
        <li><a href="networkingquiz.php">COMPUTER NETWORK</a></li>
        <li><a href="operating.php">OPERATING SYSTEM</a></li>
        <li><a href="java.php">JAVA PROGRAMMING</a></li>
    </ul>

    <!-- You can include JavaScript code here if needed -->
</body>
</html>
