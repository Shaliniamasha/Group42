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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <div class="nav">
            <div class="navbar1">
                <nav>
                    <ul class="nav_links">
                        <li><a href="<?php echo URLROOT ?>/stories/displayStories">Stories</a></li>
                        <li><a href="org.php">Organisations</a></li>
                    </ul>
                </nav>
                <a href="<?php echo URLROOT ?>/donations/home">
                    <img class="logo" src="../public/Assets/icons/logo.svg" alt="logo" height="50px">
                    <a>
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
                    <?php if (isset($_SESSION['userId'])) {
                        echo "Hi, " . explode(" ", $_SESSION["userName"])[0] . "!";
                    } else { ?>
                        <script>
                            var myVariable = <?php echo json_encode($_SESSION['userId']); ?>;
                            console.log(myVariable);
                        </script>
                        <li><a href="<?php echo URLROOT ?>/signup"><button class="white-button">Sign Up</button></a></li>
                        <li><a href="<?php echo URLROOT ?>/login"><button class="white-button">Login</button></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="home-image-container">
            <div class="homepage-image left">
                <div class="home-left-text-con">
                    <h1>Give a Little, Change a Lot.</h1>
                </div>
                <div class="home-left-image-con">
                    <img src="/give4good/public/Assets/images/home-left.png" alt="image" class="home-left-image">
                </div>
            </div>
            <div class="homepage-image right">
            <div class="donate_box">
                        <h1 class="price">Donate</h1>
                        <h5>Make a difference</h5>
                    </div>
            </div>
        </div>
    </header>