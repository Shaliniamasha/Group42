<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/new.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <header>
        <div class="nav">
            <div class="navbar1">
                <nav>
                    <ul class="nav_links">
                        <li><a href="postPage.php">Stories</a></li>
                        <li><a href="org.php">Organisations</a></li>
                    </ul>
                </nav>
                <img class="logo" src="../public/Assets/icons/logo.svg" alt="logo" height="50px">
                <nav>
                    <ul class="nav_links">
                        <li><a href="about.php">About us</a></li>
                        <li><a href="startFundraiser.php">Start a Fundraiser</a></li>
                    </ul>
                </nav>

            </div>
            <div class="navbar2">
                <ul class="nav_links">
                    <li><a href="#"><button class="white-button">Dashboard</button></a></li>
                </ul>
                <form action="" class="search-bar">
                    <input type="text" placeholder="Search Give4Good" name="search">
                    <button type="submit"><img src="../public/Assets/icons/search.svg"></button>
                </form>
                <ul class="nav_links">
                    <?php if (isset($_SESSION['usersId'])) {
                        echo "Hi, " . explode(" ", $_SESSION["usersName"])[0] . "!";
                    } else { ?>
                        <li><a href="signup.php"><button class="white-button">Sign Up</button></a></li>
                        <li><a href="login.php"><button class="white-button">Login</button></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="home-image-container">
            <div class="homepage-image left">
                <h1>Give a Little, Change a Lot.</h1>
            </div>
            <div class="homepage-image right">
            </div>
        </div>
    </header>