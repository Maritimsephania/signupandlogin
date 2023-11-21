<?php
include_once 'header.php'
?>

            <section class="index-intro">
                <h1>Welcome to Vismax</h1>
                <p>Your favourite ecommerce platform</p>
          </section>

          <section class="index-categories">
          <?php
                        if(isset($_SESSION["useruid"])){
                            echo'<h2>You are logged in as <?php $_SESSION["useruid"]?></h2>';
                        }
                        else{
                           echo '<li><a href="signup.php">Sign up</a></li>';
                       echo ' <li><a href="login.php">Log in</a></li>';

                        }
                        ?>
                <?php
include_once 'footer.php'
?>
   