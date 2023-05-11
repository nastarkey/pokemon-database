<?php
session_start();
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