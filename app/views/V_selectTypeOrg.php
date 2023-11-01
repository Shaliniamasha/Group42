<?php require APPROOT . './views/includes/header.php' ?>

<head> <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/choice.css"></head>

<main>
    <h1>Choose type of Fundraiser:</h1>
    <div class="option-container">
    <a href="<?php echo URLROOT ?>/StartFund/Houseclass"><img class= "img1" src="./public/Assets/images/Housing.jpg" alt="Housing"></a>
        <a href="<?php echo URLROOT ?>/StartFund/Healthclass"><img class= "img1" src="./public/Assets/images/Health.jpg" alt="Health"></a>
        <a href="<?php echo URLROOT ?>/StartFund/Educationclass"><img class= "img1" src="./public/Assets/images/Education.jpg" alt="Education"></a>
        <a href="<?php echo URLROOT ?>/StartFund/Sportclass"><img class= "img1" src="./public/Assets/images/Sports.jpg" alt="Sports"></a>
    </div>

</main>



<?php require APPROOT . '/views/includes/footer.php' ?>
