<?php

session_start(); // start (or resume) session

// create database connection ($connection)
$connection = new mysqli("localhost", "student", "CompSci364",
                         "pokemon");
if ($connection->connect_errno) {
  echo "Failed to connect to MySQL: " . $connection->connect_error;
  exit();
}


$error = false;
if (! isset($_SESSION["username"]) // already authenticated
    && isset($_POST["username"], $_POST["password"])) {
  // query database for account information
  $statement = $connection->prepare("SELECT password_hash ".
                                    "FROM Trainer ".
                                    "WHERE username = ?;");
  $statement->bind_param("s", $_POST["username"]);
  echo "$password_hash";
  $statement->execute();
  $statement->bind_result($password_hash);

  // username present in database
  if ($statement->fetch()) {
    // verify that the password matches stored password hash
    if (password_verify($_POST["password"], $password_hash)) {
      // store the username to indicate authentication
      $_SESSION["username"] = $_POST["username"];
    }
  }

  $error = true;
}

if (isset($_SESSION["username"])) { // authenticated
  // $location = dirname($_SERVER["PHP_SELF"]);
  // if (isset($_REQUEST["redirect"])) {
  //   $location = $_REQUEST["redirect"];
  // }

  // redirect to requested page
  header("Location: index.html");
  exit();
}

 ?>
<!DOCTYPE html>
<link  rel = "stylesheet" href = "pdb.css"></link>
<html>
  <body>
    <?php
      if ($error) {
        echo "Invalid username or password.";
      }
     ?>
     <div class="login">
    <form action="<?php echo $_SERVER["PHP_SELF"].
                             "?".$_SERVER["QUERY_STRING"]; ?>"
          method="post">
      <label for="username">Username</label>
      <input name="username" type="text"
             value="<?php if (isset($_POST["username"]))
                            echo $_POST["username"]; ?>" />
      <label for="password">Password</label>
      <input name="password" type="password" />

      <input type="submit" value="Log in" />
    </form>
    <p>Dont Have an Accout? <a href="signup.php">Click Here</a></p>
    </div>
  </body>
</html>