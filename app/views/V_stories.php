<?php require APPROOT . '/views/includes/header.php' ?>

<main>
    <h3><b>Latest Stories..</b></h3>
    <div class="grid-donations stories">
    <?php
        foreach ($data as $story) {
            ?>          
        
            <div class="card">
                <div class="image">
                    <img src="<?php echo $story->image; ?>" alt="image" height="250px" width="250px">
                </div>
                <div class="caption">
                    <p class="title"><b>
                        <?php echo $story->title; ?>
                    </b>
                    </p>
                    <p class="donee">
                            <?php echo $story ->username; ?>
                        </p>
                    <p class="description">
                            <?php echo $story ->description; ?>
                        </p>
                </div>
                <button class="blue-button">View</button>
            </div>
            <?php 
    }
    ?>

          
    </div>
</main>
<?php require APPROOT . '/views/includes/footer.php' ?>