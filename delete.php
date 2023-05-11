<button onclick="document.getElementById('id01').style.display='block'">Delete Account?</button>

<link  rel = "stylesheet" href = "pdb.css"></link>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Delete Account</h1>
      <p>Are you sure you want to delete your account?</p>

      <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="button" class="deletebtn">Delete</button>
      </div>
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

<?php 

if($_GET['username']) {

    mysql_connect("host","username","pword") or die(mysql_error()); 
    mysql_select_db("pokemon") or die(mysql_error()); 

    $username = $_GET['username'];
    $result=mysql_query("DELETE FROM Trainer WHERE username='$username'") or die(mysql_error()); 

    echo "Trainer Deleted"; 

}

?>
