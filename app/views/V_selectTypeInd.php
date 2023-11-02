<?php require APPROOT . '/views/includes/header.php' ?>

<head> <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/choice.css"></head>

<main>
    <h1>Choose type of Fundraiser:</h1>
    <div class="option-container">
        <a href="<?php echo URLROOT ?>/StartFund/Houseclass">
            <img class= "img1" src="../public/Assets/images/Housing.jpg" alt="Housing">
            <p>Fundraiser for Housing</p>
        </a>

        <a href="<?php echo URLROOT ?>/StartFund/Healthclass">
            <img class= "img1" src="../public/Assets/images/Health.jpg" alt="Health">
            <p>Fundraiser for Medical Reasons</p>
        </a>

        <a href="<?php echo URLROOT ?>/StartFund/Educationclass">
            <img class= "img1" src="../public/Assets/images/Education.jpg" alt="Education">
            <p>Fundraiser for Educational purpose</p>
        </a>
        <a href="<?php echo URLROOT ?>/StartFund/Sportclass">
            <img class= "img1" src="../public/Assets/images/Sports.jpg" alt="Sports">
            <p>Fundraiser for Sports</p>
        </a>
    </div>

    <!-- if (isset($_GET['option'])) {
        $selectedOption = $_GET['option'];
        
        // Process the selected option and display different results
        switch ($selectedOption) {
            case 'option1':
                echo '<h1>Option 1 Result</h1>';
                echo '<p>This is the result for Option 1.</p>';
                break;
            case 'option2':
                echo '<h1>Option 2 Result</h1>';
                echo '<p>This is the result for Option 2.</p>';
                break;
            case 'option3':
                echo '<h1>Option 3 Result</h1>';
                echo '<p>This is the result for Option 3.</p>';
                break;
            case 'option4':
                echo '<h1>Option 4 Result</h1>';
                echo '<p>This is the result for Option 4.</p>';
                break;
            default:
                echo '<h1>Invalid Option</h1>';
                echo '<p>Please select a valid option.</p>';
        }
    }
     -->

</main>



<?php require APPROOT . '/views/includes/footer.php' ?>
