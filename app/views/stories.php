<?php
include_once('includes/header.php');

?>
<main>
    <h3><b>Featured Topics..</b></h3>
    <div class="grid-donations stories">
    <?php
        foreach ($stories as $story) {
            ?>          
        
            <div class="card">
                <div class="image">
                    <img src="../public/Assets/fundraiserImages/2.jpg" alt="image" height="250px" width="250px">
                </div>
                <div class="caption">
                    <p class="title"><b>
                        <?php echo $story->title; ?>
                    </b>
                    </p>
                    <p class="donee">
                            <?php echo $story ->requiredAmount; ?>
                        </p>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan, quam in varius convallis, est erat consectetur lorem, non suscipit dui lectus id urna. Cras id viverra nunc. Donec eget elit risus. Integer at quam ac justo facilisis egestas. Nulla facilisi. Nulla nec tincidunt lectus. Morbi vestibulum, erat at lacinia condimentum, ante ex malesuada libero, at vulputate ex nisi eget nunc. Integer quis mi in ex faucibus dictum.
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce vel quam ut ante vestibulum euismod. Integer sit amet metus quis odio venenatis pharetra. Proin tristique purus id nulla bibendum, in lacinia elit gravida. Aliquam tristique tincidunt metus, ut dictum risus congue id. Phasellus ac vestibulum quam, eget eleifend risus. Sed non luctus elit, et lacinia metus. Curabitur nec justo eget sem cursus egestas.

                            <?php echo $story ->story; ?>
                        </p>
                </div>
                <button class="blue-button">View</button>
            </div>
            <?php 
            $counter++;
    }
    ?>

          
    </div>
</main>
<?php
include_once('includes/footer.php');

?>