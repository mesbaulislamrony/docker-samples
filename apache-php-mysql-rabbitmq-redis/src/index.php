<?php
// Check PHP Version

echo "PHP Version : " . phpversion() . "<br><br>";

//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'mysql';

// Database use name
$user = 'root';

//database user password
$pass = 'password';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error) . "<br><br>";
} else {
    echo "Connected to MySQL server successfully!" . "<br><br>";
}