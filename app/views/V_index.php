<?php require APPROOT . '/views/includes/header.php' ?>

<main>
    <div class="home-image-container">
            <div class="homepage-image left">
                <div class="home-left-text-con">
                    <h1>Give a Little, Change a Lot.</h1>
                </div>
                <div class="home-left-image-con">
                <div class="donate_box">
                        <h1 class="price">Donate >> </h1>
                        <h5>Make a difference</h5>
                    </div>
            </div>
                </div>
        
            <div class="homepage-image right">
    
            </div>
        </div>
   
    <div class="container">
    <h1><b>Featured Topics...</b></h1>
    <div class="grid-donations">
        <?php 
        foreach ($data as $donation) {
            ?>

            <div class="card">
                <div class="image">
                    <img src="<?php echo $donation->storyImages; ?>" alt="image" height="250px" width="250px">
                </div>
                <div class="caption">
                    <p class="progressBar">
                    </p>
                    <p class="title"><b>
                            <?php echo $donation->title; ?>
                        </b>
                    </p>
                    <p class="amount"><b>
                            <?php $donation->requiredAmount; ?>
                        </b></p>
                    <p class="description">
                        <?php echo $donation->story; ?>
                    </p>
                </div>
                <li><a href="<?php echo URLROOT ?>/Donations/FundraiserView/<?php echo $donation->id ?>"> <button class="blue-button">Donate</button></a></li>
                       
               
            </div>
            <?php
        }
        ?>


    </div>
    <div>
    </div>
</main>
<?php require APPROOT . '/views/includes/footer.php' ?>