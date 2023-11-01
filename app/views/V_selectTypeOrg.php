<?php require APPROOT . './views/includes/header.php' ?>

<head> <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/choice.css"></head>

<main>
    <h1>Choose type of Fundraiser:</h1>
    <div class="option-container">
        <a href="<?php echo URLROOT ?>/StartFund/Commonclass">
            <img class= "img1" src="../public/Assets/images/Housing.jpg" alt="Housing">
            <p>Fundraiser for Housing</p>
        </a>

        <a href="<?php echo URLROOT ?>/StartFund/Commonclass">
            <img class= "img1" src="../public/Assets/images/Health.jpg" alt="Health">
            <p>Fundraiser for Medical Reasons</p>
        </a>

        <a href="<?php echo URLROOT ?>/StartFund/Commonclass">
            <img class= "img1" src="../public/Assets/images/Education.jpg" alt="Education">
            <p>Fundraiser for Educational purpose</p>
        </a>
        <a href="<?php echo URLROOT ?>/StartFund/Commonclass">
            <img class= "img1" src="../public/Assets/images/Sports.jpg" alt="Sports">
            <p>Fundraiser for Sports</p>
        </a>
    </div>

</main>



<?php require APPROOT . '/views/includes/footer.php' ?>
