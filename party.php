<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// create database connection ($connection)
$connection = new mysqli("localhost", "student", "CompSci364",
                         "pokemon");
if ($connection->connect_errno) {
  echo "Failed to connect to MySQL: " . $connection->connect_error;
  exit();
}

$statement1 = $connection->prepare("SELECT trainer_id ".
                                    "FROM Trainer ".
                                    "WHERE username = ?;");
$statement1->bind_param("s", $_SESSION["username"]);

if (!$statement1->execute()) {
    echo "Error executing statement: " . $statement1->error;
    exit();
}
if($statement1->get_result() !== NULL)
    $statement1->bind_result($trainer_id);

$id = (int)$trainer_id;

$statement = $connection->prepare("SELECT pokemon1, pokemon2, pokemon3, pokemon4, pokemon5, pokemon6 ".
                                    "FROM Party ".
                                    "WHERE trainer_id = ?;");
$statement->bind_param("i", $id);

if (!$statement->execute()) {
    echo "Error executing statement: " . $statement->error;
    exit();
}

$name1 = "question_mark";
$name2 = "question_mark";
$name3 = "question_mark";
$name4 = "question_mark";
$name5 = "question_mark";
$name6 = "question_mark";
if($statement->get_result() !== NULL)
    $statement->bind_result($pokemon1, $pokemon2, $pokemon3, $pokemon4, $pokemon5, $pokemon6);
    if(isset())


$statement->close();
$statement1->close();
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
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        <h2>Party Pokemon</h2>
        <div class="party">
            <table>
                <tr>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".$name1.".png"?>>
                    </td>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".$name1.".png"?>>
                    </td>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".$name1.".png"?>>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".$name1.".png"?>>
                    </td>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".$name1.".png"?>>
                    </td>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".$name1.".png"?>>
                    </td>
                </tr>
            </table>
            
        </div>
        
    </body>
</html>