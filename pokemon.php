<?php
session_start();





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
        <form method="get" action="pokemon_client.php">
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