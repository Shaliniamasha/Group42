<?php require APPROOT . '/views/includes/header.php' ?>

<head> <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/choice.css"></head>

<main>
    <h1>Choose type of Fundraiser:</h1>
    <div class="option-container">
        <a href="<?php echo URLROOT ?>/StartFundOrg/Houseclass">
            <img class= "img1" src="./public/Assets/images/Housing.jpg" alt="Housing">
            <p>Fundraiser for Housing</p>
        </a>

        <a href="<?php echo URLROOT ?>/StartFundOrg/Healthclass">
            <img class= "img1" src="./public/Assets/images/Health.jpg" alt="Health">
            <p>Fundraiser for Medical Reasons</p>
        </a>

        <a href="<?php echo URLROOT ?>/StartFundOrg/Educationclass">
            <img class= "img1" src="./public/Assets/images/Education.jpg" alt="Education">
            <p>Fundraiser for Educational purpose</p>
        </a>

        <a href="<?php echo URLROOT ?>/StartFundOrg/Sportclass">
            <img class= "img1" src="./public/Assets/images/Sports.jpg" alt="Sports">
            <p>Fundraiser for Sports</p>
        </a>
    </div>

    
    <div class="option-container">

        <a href="<?php echo URLROOT ?>/StartFundOrg/Animalclass">
            <img class= "img1" src="./public/Assets/images/Animal.jpg" alt="Animal Care">
            <p>Fundraiser for Animal Care</p>
        </a>

        <a href="<?php echo URLROOT ?>/StartFundOrg/Environmentclass">
            <img class= "img1" src="./public/Assets/images/Environment.jpg" alt="Environment">
            <p>Fundraiser for Environmental Causes</p>
        </a>

        <a href="<?php echo URLROOT ?>/StartFundOrg/NaturalDisasterclass">
            <img class= "img1" src="./public/Assets/images/NaturalDisaster.jpg" alt="Natural Disaster">
            <p>Fundraiser for Natural Disaster Victims</p>
        </a>

        <a href="<?php echo URLROOT ?>/StartFundOrg/Communityclass">
            <img class= "img1" src="./public/Assets/images/Community.jpg" alt="Community">
            <p>Fundraiser for a Community</p>
        </a>
        
    </div>

</main>



<?php require APPROOT . '/views/includes/footer.php' ?>
