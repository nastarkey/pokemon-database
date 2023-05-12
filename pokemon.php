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

//chatgpt idea :o
$isEmpty = true;
if(!empty($_GET)){
       foreach($_GET as $key => $value){
              if(!empty($value)){
                     $isEmpty = false;
                     break;
              }
       }
}


if(!$isEmpty and !empty($_GET["PokemonNumber"])){
    $num = $_GET["PokemonNumber"];
    $query = "SELECT * FROM Pokemon INNER JOIN Pokemon_Type USING(pokedex_number) WHERE pokedex_number = $num;";
    $result = $connection->query($query);
    $type1 = NULL;
    if($result !== NULL){
        while($row = $result->fetch_assoc()){
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
} else {
       echo "<table>";
       $query = "SELECT * FROM Pokemon INNER JOIN Pokemon_Type USING(pokedex_number);";
       $result = $connection->query($query);
       $type1 = NULL;
       $col = 1;
       if($result !== NULL){
           while($row = $result->fetch_assoc()){
              if(isset($pokemon_name) and $pokemon_name !== $row['pokemon_name']){
                     if($col == 1){
                            echo "<tr>";
                     }
                     echo "<td>"."<img src=\"resources/pokemon_pics/".strtolower($pokemon_name).".png\">";
                     echo "<p>Weight: ". $weight . " Height: " . $height . "</p>";
                     echo "<p>Ability: " . $ability . "</p>";
                     echo "<form method=\"GET\" action=\"pokemon_client.php\">";
                     echo "<button name=\"".$pokemon_name."\" type=\"submit\" value=\"".$row['pokedex_number']."\">Add to team</button></td>";
                     // echo "<input"
                     $col++;
                     if($col > 3){
                            $col = 1;
                            echo "</tr>";
                     }
              }
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
           echo "<td>"."<img src=\"resources/pokemon_pics/".strtolower($pokemon_name).".png\">";
              echo "<p>Weight: ". $weight . " Height: " . $height . "</p>";
              echo "<p>Ability: " . $ability . "</p>";
              echo "<form method=\"GET\" action=\"pokemon_client.php\">";
              echo "<button name=\"".$pokemon_name."\" type=\"submit\" value=\"".$row['pokedex_number']."\">Add to team</button></td>";
       }   
}





?>


<!DOCTYPE html>
<link  rel = "stylesheet" href = "pdb.css"></link>
<html>
    <body>
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="party.php">Party</a>
        <a class="active" href="pokemon.php">Pokemon</a>
        <a href="map.php">Map</a>
        <?php
                $log = "Login";
                if(isset($_SESSION["username"]))
                   $log = "Logout";
            ?>
            <a href=<?php echo $log.".php"?>><?php echo $log?></a>
    </div>



        <h2>Search Pokemon</h2>
        <form method="get">
            <label for="PokemonNumber">Pokemon Number</label><br>
            <input type="number" id="PokemonNumber" name="PokemonNumber"
                   min="1" max="210" size="3" pattern="[0-9]{1,3}"><br>
            <label for="PokemonName">Pokemon Name</label><br>
            <input type="text" id="PokemonName" name="PokemonName"
                   size="50" pattern="[A-Za-z-.2 ]{1,50}"><br>
            <label for="PokemonType">Pokemon Type</label><br>
            <input type="text" id="PokemonType" name="PokemonType"
                   size="50" pattern="[A-Za-z]{1,50}"><br>
            <label for="PokemonLocation">Pokemon Location</label><br>
            <input type="text" id="PokemonLocation" name="PokemonLocation"
                   size="50" pattern="[A-Za-z0-9 .]{1,50}"><br>
            <br>
            <input type="submit" value="Search"><br>
        </form>
    </body>
</html>