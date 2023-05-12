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

$statement = $connection->query("SELECT trainer_id FROM Trainer WHERE username ='".$_SESSION["username"]."';");
$row = $statement->fetch_assoc();
$id = $row['trainer_id'];

$query = $connection->query("SELECT * FROM Party WHERE trainer_id =". $id . ";");
if($query->num_rows > 0){
    $row = $query->fetch_assoc();
    $pokemon1 = $row['pokemon1'];
    $pokemon2 = $row['pokemon2'];
    $pokemon3 = $row['pokemon3'];
    $pokemon4 = $row['pokemon4'];
    $pokemon5 = $row['pokemon5'];
    $pokemon6 = $row['pokemon6'];
}


$name1 = "question_mark";
$name2 = "question_mark";
$name3 = "question_mark";
$name4 = "question_mark";
$name5 = "question_mark";
$name6 = "question_mark";

if(isset($pokemon1)){
    $query1 = $connection->query("SELECT pokemon_name FROM Pokemon WHERE pokedex_number = $pokemon1;");
    $row = $query1->fetch_assoc();
    $name1 = $row['pokemon_name'];
}

if(isset($pokemon2)){
    $query2 = $connection->query("SELECT pokemon_name FROM Pokemon WHERE pokedex_number = $pokemon2;");
    $row = $query2->fetch_assoc();
    $name2 = $row['pokemon_name'];
}

if(isset($pokemon3)){
    $query3 = $connection->query("SELECT pokemon_name FROM Pokemon WHERE pokedex_number = $pokemon3;");
    $row = $query3->fetch_assoc();
    $name3 = $row['pokemon_name'];
}

if(isset($pokemon4)){
    $query4 = $connection->query("SELECT pokemon_name FROM Pokemon WHERE pokedex_number = $pokemon4;");
    $row = $query4->fetch_assoc();
    $name4 = $row['pokemon_name'];
}

if(isset($pokemon5)){
    $query5 = $connection->query("SELECT pokemon_name FROM Pokemon WHERE pokedex_number = $pokemon5;");
    $row = $query5->fetch_assoc();
    $name5 = $row['pokemon_name'];
}

if(isset($pokemon6)){
    $query6 = $connection->query("SELECT pokemon_name FROM Pokemon WHERE pokedex_number = $pokemon6;");
    $row = $query6->fetch_assoc();
    $name6 = $row['pokemon_name'];
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
                        <img src=<?php echo "resources/pokemon_pics/".strtolower($name1).".png"?>>
                        <?php echo "<p>".$name1."</p>"?>
                    </td>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".strtolower($name2).".png"?>>
                        <?php echo "<p>".$name2."</p>"?>
                    </td>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".strtolower($name3).".png"?>>
                        <?php echo "<p>".$name3."</p>"?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".strtolower($name4).".png"?>>
                        <?php echo "<p>".$name4."</p>"?>
                    </td>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".strtolower($name5).".png"?>>
                        <?php echo "<p>".$name5."</p>"?>
                    </td>
                    <td>
                        <img src=<?php echo "resources/pokemon_pics/".strtolower($name6).".png"?>>
                        <?php echo "<p>".$name6."</p>"?>
                    </td>
                </tr>
            </table>
            
        </div>
        
    </body>
</html>