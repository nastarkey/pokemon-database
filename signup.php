<?php

$server = "localhost";
$username = "student";
$password = "CompSci364";

$connection = new mysqli($server, $username, $password, "pokemon");

if ($connection->connect_errno) {
    echo "Failed to connect to MySQL: " . $connection->connect_error;
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $connection->prepare("INSERT INTO Trainer(username, password_hash, email) VALUES (?, ?, ?)");
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = $_POST['email'];
    $stmt->bind_param("sss", $username, $password, $email);
    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
    } else {
        echo "User added successfully.";  
        header('Location: Login.php');
    }
}

$connection->close();

?>


<!DOCTYPE html>
<link  rel = "stylesheet" href = "pdb.css"></link>
<html>
    <body>
        <div class="topnav">
            <a href="index.php">Home</a>
            <a href="party.php">Party</a>
            <a href="pokemon.php">Pokemon</a>
            <a href="map.php">Map</a>
            <?php
                $log = "Login";
                if(isset($_SESSION["username"]))
                   $log = "Logout";
            ?>
            <a href=<?php echo $log.".php"?>><?php echo $log?></a>
        </div>
        <form method="post">
            <label for="username">Username:</label>
            <input required type="text" name="username" id="username">
            <br>
            <label for="email">Email</label>
            <input required pattern=".{1,50}" 
            type="email" name="email" id="email">
            <br>
            <label for="password">Password:</label>
            <input required type="password" name="password" id="password"
            onchange="if(this.checkValidity()) form.pass_confirm.pattern = this.value;">
            <br>
            <label for="pass_confirm">Confirm Password</label>
            <input required type="password" name="pass_confirm" id="password_confirm"
            onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');">
            <br>
            <input type="submit" value="Add User">
        </form>
    </body>
</html>
