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
DROP TABLE IF EXISTS Users;
CREATE TABLE Users (
    username CHARACTER VARYING(32),
    password_hash CHARACTER VARYING(255) NOT NULL,
    PRIMARY KEY (username)
);

INSERT INTO Users(username, password_hash) VALUES ('student', md5('password'));

QUERIES;

if (!$connection->multi_query($sql)) {
    echo "Error: " . $connection->error;
}

