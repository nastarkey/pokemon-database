<?php
session_start();
?>

<!DOCTYPE html>
<link  rel = "stylesheet" href = "pdb.css"></link>
<html>
    <body>
        <div class="topnav">
            <a class="active" href="index.php">Home</a>
            <a href="party.php">Party</a>
            <a href="pokemon.php">Pokemon</a>
            <a href="map.php">Map</a>
            <?php
                $log = "Login";
                $del = NULL;
                if(isset($_SESSION["username"]))
                    $log = "Logout";
                    $del = "Delete";
            ?>
            <a href=<?php echo $log.".php"?>><?php echo $log?></a>
            <a href=<?php echo $del.".php"?>><?php if(isset($_SESSION["username"]))
                                                        echo $del." Account"?></a>
        </div>
        <div class="aboutText">
            <p>
                Welcome to the world of Pokemon! This is the website home for the database of all Pokemon appearing in the popular game Pokemon Platinum.
                Navigate to the Pokemon tab to search for a Pokemon within in the game to learn all about its stats, moves, location, etc.
                Head over to the Map tab to find the location of any Pokemon you searched or just to gander at the beautiful map of Sinnoh.
                Finally, you can log in at the top right and register as a trainer so that you can keep a party of your own in the Party tab!
                Enjoy our website!
                -Travis and Nathan
            </p>
        </div>

    </body>
</html>