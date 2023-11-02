<?php require APPROOT . '/views/includes/header.php' ?>

<main>
<div class="story-container">
        <div>
            <h1><b>Latest Stories...</b></h1>
        </div>
        <div class="add">
        <a href="<?php echo URLROOT ?>/stories/create"><i class="fa-solid fa-circle-plus fa-4x"></i></a>
        </div>
    </div>
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
                        <?php echo $story->username; ?>
                    </p>
                    <p class="description">
                        <?php echo $story->description; ?>
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