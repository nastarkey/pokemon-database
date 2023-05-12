<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// create database connection ($connection)
$connection = new mysqli("localhost", "student", "CompSci364",
                         "pokemon");

if ($connection->connect_errno) {
  echo "Failed to connect to MySQL: ".$connection->connect_error;
  exit();
}

if(isset($_GET["PokemonNumber"])){
    $num = $_GET["PokemonNumber"];
    $query = "SELECT * FROM Pokemon INNER JOIN Pokemon_Type USING(pokedex_number) WHERE pokedex_number = $num;";
    $result = $connection->query($query);
    $type1 = NULL;
    if($result !== NULL){
        while($row = $results->fetch_assoc()){
            $pokemon_name = $row['pokemon_name'];
            $weight = $row['weight'];
            $height = $row['height'];
            $ability = $row['ability'];
            if($type1 !== NULL) {
                $type2 = $row['Type_name'];
            } else {
                $type1 = $row['Type_name'];
            }
        }
    }
}

?>




