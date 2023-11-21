<?php
session_start();
?>
<!DOCTYPE html>
    <html lang= "en" dir= "ltr">
        <head>
            <meta charset= "utf-8">
            <title>Vismax</title>
            <link rel="stylesheet" type="text/css" href="css/reset.css">
            <link rel="stylesheet" type="text/css" href="css/style.css">
        </head>
        <body>
            <nav>
                <div class ="wrapper">
                    <a href="index.php"><img src="" alt= ""></a>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="discover.php">About Us</a></li>
                        <li><a href="blog.php">Find Blogs</a></li>
                        <?php
                        if(isset($_SESSION["useruid"])){
                            echo  "<li><a href='profile.php'> Profile page </a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                        }
                        else{
                           echo '<li><a href="signup.php">Sign up</a></li>';
                       echo ' <li><a href="login.php">Log in</a></li>';

                        }
                        ?>
                    </ul>
                 </div>
            </nav>
            <div class="wrapper">
        