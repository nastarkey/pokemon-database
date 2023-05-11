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
        <a href="pokemon.php">Pokemon</a>
        <a class="active" href="map.php">Map</a>
        <?php
                $log = "Login";
                if(isset($_SESSION["username"]))
                   $log = "Logout";
            ?>
            <a href=<?php echo $log.".php"?>><?php echo $log?></a>
    </div>
        <h2>Map of Sinnoh</h2>
        <div class="mapImage">
            <img src="resources/sinnohMap.jpg" alt="Sinnoh Map">
        </div>
    </body>
</html>