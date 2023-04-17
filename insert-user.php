<?php

$server = "localhost";
$username = "student";
$password = "password";

$connection = new mysqli($server, $username, $password, "student")
    or die("Count not connect");

$sql = <<<QUERIES
DROP TABLE IF EXISTS Users;
CREATE TABLE Users (
    username CHARACTER VARYING(32),
    password_hash blob NOT NULL,
    PRIMARY KEY (username)
);

INSERT INTO Example(data) VALUES
('fake-data-1'),
('fake-data-2'),
('fake-data-3');
QUERIES;

$connection->multi_query($sql)
    or die("OOps");