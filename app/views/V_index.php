<?php require APPROOT . '/views/includes/header.php' ?>
<main>
    <h1><b>Featured Topics..</b></h1>
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
                <button class="blue-button">Donate</button>
            </div>
            <?php
        }
        ?>


    </div>
</main>
<?php require APPROOT . '/views/includes/footer.php' ?>