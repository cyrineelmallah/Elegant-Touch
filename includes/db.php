<?php
$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "daily_planner";
$port = 8889;

try {
    // Create a PDO instance with port in the DSN
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $user, $pass);
    
    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optional: echo a success message
    // echo "Connected successfully";

} catch (PDOException $e) {
    // Catch any connection error
    die("Connection failed: " . $e->getMessage());
}
?>

