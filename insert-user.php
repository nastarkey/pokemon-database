<?php

$server = "localhost";
$username = "student";
$password = "password";

$connection = new mysqli($server, $username, $password, "student")
    or die("Could not connect");

$sql = <<<QUERIES
DROP TABLE IF EXISTS Users;
CREATE TABLE Users (
    username CHARACTER VARYING(32),
    password_hash CHARACTER VARYING(255) NOT NULL,
    PRIMARY KEY (username)
);

INSERT INTO Example(username, password_hash) VALUES
('student', md5('password'));

QUERIES;

$connection->multi_query($sql)
    or die("OOps");