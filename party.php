<?php
session_start();


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
$statement1->execute();
$statement1->bind_result($trainer_id);

$statement = $connection->prepare("SELECT pokemon1, pokemon2, pokemon3, pokemon4, pokemon5, pokemon6 ".
                                    "FROM Party ".
                                    "WHERE trainer_id = ?;");
$statement->bind_param("s", $trainer_id);
$statement->execute();
$statement->bind_result($pokemon1, $pokemon2, $pokemon3, $pokemon4, $pokemon5, $pokemon6)

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
                        <img src="resources/question_mark.png">
                    </td>
                    <td>
                        <img src="resources/question_mark.png">
                    </td>
                    <td>
                        <img src="resources/question_mark.png">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="resources/question_mark.png">
                    </td>
                    <td>
                        <img src="resources/question_mark.png">
                    </td>
                    <td>
                        <img src="resources/question_mark.png">
                    </td>
                </tr>
            </table>
            
        </div>
        
    </body>
</html>