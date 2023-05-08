<?php

$server = "localhost";
$username = "student";
$password = "CompSci364";

$connection = new mysqli($server, $username, $password, "student");

if ($connection->connect_errno) {
    echo "Failed to connect to MySQL: " . $connection->connect_error;
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $connection->prepare("INSERT INTO Users(username, password_hash) VALUES (?, ?)");
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $stmt->bind_param("ss", $username, $password);
    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
    } else {
        echo "User added successfully.";
        
    }
}

$connection->close();

?>

<form method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" value="Add User">
</form>
