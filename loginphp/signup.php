<?php
include_once 'header.php'
?>
<section class="signup-form">
    <h2>Sign up </h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="full name...">
        <input type="text" name="email" placeholder="email...">
        <input type="text" name="uid" placeholder="username">
        <input type="password" name="pwd" placeholder="password">
        <input type="password" name="pwdrepeat" placeholder="repeat password">
        <button type="submit" name="submit">Sign up</button>
 </form>
 <?php
if(isset($_GET["error"])){
    if($_GET["error"]== "emptyinput"){
        echo "<p>Fill in all fields!</p>";
    }
        else if($_GET["error"]== "invaliduid"){
            echo "<p>choose a proper username!</p>";
        }
        else if($_GET["error"]== "invaliduemail"){
            echo "<p>choose a proper email!</p>";
        }
        else if($_GET["error"]== "passwordsdontmatch"){
            echo "<p>passwords doesn't match!</p>";
        }
        else if($_GET["error"]== "stmfailed"){
            echo "<p>Something went wrong, try again!</p>";
        }
        else if($_GET["error"]== "usernameexists"){
            echo "<p>Username already taken!</p>";
        }
        else if($_GET["error"]== "none"){
            echo "<p>You signed up sucessfully!</p>";
        }
}
?>
</section>




       
              
<?php
include_once 'footer.php'
?>
   