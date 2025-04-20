<!DOCTYPE html>
<?php

session_start();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Socmed</title>
        <link href="./res/mystyle.css" rel="stylesheet" type="text/css"/>
        <link href="./res/new-style.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="navbar">
    <a href="./index.php" class="logo">
        <img src="./res/media/logo.png" alt="">
    </a>
    <a href="./index.php">HOME</a>
    <a href="./gallery.php">GALLERY</a>
    <a href="./about.php">ABOUT</a>
    <?php 
    if (isset($_SESSION['uid'])) { ?>            
        <a href="./profile.php">
            <?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?>
        </a>
        <a href="./models/sign-out.php">SIGNOUT</a>
    <?php 
    } else { ?>              
        <a href="./sign-in.php">SIGN IN</a>
        <a href="./sign-up.php">SIGN UP</a>
    <?php
    }
    ?>
</div>
        