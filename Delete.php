<?php
session_start();
?>

<button onclick="document.getElementById('id01').style.display='block'">Open Modal</button>

<link  rel = "stylesheet" href = "pdb.css"></link>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Delete Account</h1>
      <p><?php echo $_SESSION["username"]?> Are you sure you want to delete your account?</p>

      <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="button" class="deletebtn">Delete</button>
      </div>
      <?php 

        if(isset($_GET['username'])) {
          $user=$GET['username'];
          $delete=mysqli__query($connection,"DELETE FROM 'Trainer' WHERE 'username'='$user'");
          echo "Trainer Deleted"; 
          header("location:index.php");
          die();
        }
      ?>
      </div>
  </form>
</div>  

<script>

var modal = document.getElementById('id01');

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

