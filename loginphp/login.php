<?php
include_once 'header.php'
?>
<section class="includes/signup-form">
    <h2>Log in</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="email" placeholder="usename/email...">
        <input type="password" name="pwd" placeholder="password">
        <button type="submit" name="submit">Log in</button>
 </form>
 <?php
if(isset($_GET["error"])){
    if($_GET["error"]== "emptyinput"){
        echo "<p>Fill in all fields!</p>";
    }
        else if($_GET["error"]== "wronglogin"){
            echo "<p>choose a proper username!</p>";
        }
        else if($_GET["error"]== "invaliduemail"){
            echo "<p>choose a proper email!</p>";
        }
        
}
?>
</section>

       
              
<?php
include_once 'footer.php'
?>
   