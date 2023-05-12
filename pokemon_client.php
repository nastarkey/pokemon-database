<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
$referer = $_SERVER['HTTP_REFERER'];

// create database connection ($connection)
$connection = new mysqli("localhost", "student", "CompSci364",
                         "pokemon");

if ($connection->connect_errno) {
  echo "Failed to connect to MySQL: ".$connection->connect_error;
  exit();
}

if(isset($_SESSION["username"])){
    $pokemon_id = $_GET["pokemon"];
    $user = $_SESSION["username"];

    $trainer = $connection->query("SELECT trainer_id FROM Trainer WHERE username ='" . $user . "';");
    $row = $trainer->fetch_assoc();
    $trainer_id = $row['trainer_id'];

    $result = $connection->query("SELECT * FROM Party WHERE trainer_id=".$trainer_id.";");
    $pokemon1 = NULL;
    $pokemon2 = NULL;
    $pokemon3 = NULL;
    $pokemon4 = NULL;
    $pokemon5 = NULL;
    $pokemon6 = NULL;
    echo $trainer_id;
    echo $result->num_rows;
    if($result->num_rows > 0){
        echo "hello";
        while($row = $result->fetch_assoc()){
            $pokemon1 = $row['pokemon1'];
            $pokemon2 = $row['pokemon2'];
            $pokemon3 = $row['pokemon3'];
            $pokemon4 = $row['pokemon4'];
            $pokemon5 = $row['pokemon5'];
            $pokemon6 = $row['pokemon6'];
            echo $pokemon1;
        }
        if($pokemon2 == NULL){
            $query = $connection->query("UPDATE Party SET pokemon2 = " . $_GET["pokemon"] . " WHERE trainer_id =". $trainer_id .";");
        } elseif($pokemon3 == NULL){
            $query = $connection->query("UPDATE Party SET pokemon3 = " . $_GET["pokemon"] . " WHERE trainer_id =". $trainer_id .";");
        } elseif($pokemon4 == NULL){
            $query = $connection->query("UPDATE Party SET pokemon4 = " . $_GET["pokemon"] . " WHERE trainer_id =". $trainer_id .";");
        } elseif($pokemon5 == NULL){
            $query = $connection->query("UPDATE Party SET pokemon5 = " . $_GET["pokemon"] . " WHERE trainer_id =". $trainer_id .";");
        } elseif($pokemon6 == NULL){
            $query = $connection->query("UPDATE Party SET pokemon6 = " . $_GET["pokemon"] . " WHERE trainer_id =". $trainer_id .";");
        }
    } else {
        $add = $connection->query("INSERT INTO Party (trainer_id, pokemon1, pokemon2, pokemon3, pokemon4, pokemon5, pokemon6)" .
        "VALUES (" . $trainer_id . ", " . $_GET["pokemon"] . ", NULL, NULL, NULL, NULL, NULL);");
        echo "not hello";
    }

    
} else {
    echo "<p>You are not signed in!</p>";
}


if (strpos($referer, '?') !== false) {
    $referer .= '&' . http_build_query($_GET);
} else {
    $referer .= '?' . http_build_query($_GET);
}
header("Location: " . $referer);


?>




