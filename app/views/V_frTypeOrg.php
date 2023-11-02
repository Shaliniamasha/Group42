<?php require APPROOT . '/views/includes/header.php' ?>

<head> <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/choice.css"></head>
<main>

    <h1>Type of Fundraiser:</h1>
    <div class="option-container">
        <a href="<?php echo URLROOT ?>/FundtypeOrg/Materialclass">
            <img class= "img1" src="./public/Assets/images/Material.jpg" alt="Material">
            <p>Material Fundraiser</p>
        </a>
        <a href="<?php echo URLROOT ?>/FundtypeOrg/Moneyclass">
            <img class= "img1" src="./public/Assets/images/money.jpg" alt="Money">
            <p>Monetary Fundraiser</p>
        </a>


        <!-- Only for organizations -->


        <a href="<?php echo URLROOT ?>/FundtypeOrg/Merchclass">
            <img class= "img1" src="./public/Assets/images/Merch.jpg" alt="Merch">
            <p>Merchandise </p>
        </a>
    </div>

</main>

<?php require APPROOT . '/views/includes/footer.php'?>