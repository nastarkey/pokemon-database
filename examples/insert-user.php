<?php

$server = "localhost";
$username = "student";
$password = "CompSci364";

$connection = new mysqli($server, $username, $password, "student");

if ($connection->connect_errno) {
    echo "Failed to connect to MySQL: " . $connection->connect_error;
    exit();
}

$sql = <<<QUERIES
INSERT INTO Users(username, password_hash) VALUES ('student', md5('password'));
QUERIES;

if (!$connection->multi_query($sql)) {
    echo "Error: " . $connection->error;
}

