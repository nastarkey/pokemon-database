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

$statement = $connection->prepare("SELECT trainer_id ".
                                    "FROM Trainer ".
                                    "WHERE username = ?;");
$statement->bind_param("s", $_SESSION["username"]);

if (!$statement->execute()) {
    echo "Error executing statement: " . $statement->error;
    exit();
}
if($statement->get_result() !== NULL)
    $statement->bind_result($trainer_id);

$id = (int)$trainer_id;


/*
    GET POKEMON IDS FROM PARTY 
*/
$statement1 = $connection->prepare("SELECT pokemon1 ".
                                    "FROM Party ".
                                    "WHERE trainer_id = ?;");
$statement1->bind_param("i", $id);
if (!$statement1->execute()) {
    echo "Error executing statement: " . $statement1->error;
    exit();
}
if($statement1->get_result() !== NULL)
    $statement1->bind_result($pokemon1);
$statement1->close();


$statement2 = $connection->prepare("SELECT pokemon2 ".
                                    "FROM Party ".
                                    "WHERE trainer_id = ?;");
$statement2->bind_param("i", $id);
if (!$statement2->execute()) {
    echo "Error executing statement: " . $statement2->error;
    exit();
}
if($statement2->get_result() !== NULL)
    $statement2->bind_result($pokemon2);
$statement2->close();


$statement3 = $connection->prepare("SELECT pokemon3 ".
                                    "FROM Party ".
                                    "WHERE trainer_id = ?;");
$statement3->bind_param("i", $id);
if (!$statement3->execute()) {
    echo "Error executing statement: " . $statement3->error;
    exit();
}
if($statement3->get_result() !== NULL)
    $statement3->bind_result($pokemon3);
$statement3->close();


$statement4 = $connection->prepare("SELECT pokemon4 ".
                                    "FROM Party ".
                                    "WHERE trainer_id = ?;");
$statement4->bind_param("i", $id);
if (!$statement4->execute()) {
    echo "Error executing statement: " . $statement4->error;
    exit();
}
if($statement4->get_result() !== NULL)
    $statement4->bind_result($pokemon4);
$statement4->close();

$statement5 = $connection->prepare("SELECT pokemon5 ".
                                    "FROM Party ".
                                    "WHERE trainer_id = ?;");
$statement5->bind_param("i", $id);
if (!$statement5->execute()) {
    echo "Error executing statement: " . $statement5->error;
    exit();
}
if($statement5->get_result() !== NULL)
    $statement5->bind_result($pokemon5);
$statement5->close();

$statement6 = $connection->prepare("SELECT pokemon6 ".
                                    "FROM Party ".
                                    "WHERE trainer_id = ?;");
$statement6->bind_param("i", $id);
if (!$statement6->execute()) {
    echo "Error executing statement: " . $statement6->error;
    exit();
}
if($statement6->get_result() !== NULL)
    $statement6->bind_result($pokemon6);
$statement6->close();


$name1 = "question_mark";
$name2 = "question_mark";
$name3 = "question_mark";
$name4 = "question_mark";
$name5 = "question_mark";
$name6 = "question_mark";

if(isset($pokemon1)){
    $query1 = $connection->query("SELECT pokemon_name FROM Pokemon WHERE pokedex_number = $pokemon1;");
    $name1 = $query1->get_result();
}

if(isset($pokemon2)){
    $query2 = $connection->query("SELECT pokemon_name FROM Pokemon WHERE pokedex_number = $pokemon2;");
    $name2 = $query2->get_result();
}

if(isset($pokemon3)){
    $query3 = $connection->query("SELECT pokemon_name FROM Pokemon WHERE pokedex_number = $pokemon3;");
    $name3 = $query3->get_result();
}

if(isset($pokemon4)){
    $query4 = $connection->query("SELECT pokemon_name FROM Pokemon WHERE pokedex_number = $pokemon4;");
    $name4 = $query4->get_result();
}

if(isset($pokemon5)){
    $query5 = $connection->query("SELECT pokemon_name FROM Pokemon WHERE pokedex_number = $pokemon5;");
    $name5 = $query5->get_result();
}

if(isset($pokemon6)){
    $query6 = $connection->query("SELECT pokemon_name FROM Pokemon WHERE pokedex_number = $pokemon6;");
    $name6 = $query6->get_result();
}

$statement->close();
$connection->close();

?>

<!DOCTYPE html>
<link  rel = "stylesheet" href = "pdb.css"></link>
<html>
    <body>
        <div class="topnav">
            <a href="index.php">Home</a>
            <a class="active" href="party.php">Party</a>
            <a href="pokemon.php">Pokemon</a>
            <a href="map.php">Map</a>
            <?php
                $log = "Login";
                if(isset($_SESSION["username"]))
                   $log = "Logout";
            ?>
            <a href=<?php echo $log.".php"?>><?php echo $log?></a>
            <!-- <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Submit</button>
                </form>
            </div> -->
        </div>
        <h2>Party Pokemon</h2>
        <div class="party">
            <table>
                <tr>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".$name1.".png"?>>
                    </td>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".$name2.".png"?>>
                    </td>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".$name3.".png"?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".$name4.".png"?>>
                    </td>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".$name5.".png"?>>
                    </td>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".$name6.".png"?>>
                    </td>
                </tr>
            </table>
            
        </div>
        
    </body>
</html>