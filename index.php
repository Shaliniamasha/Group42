<?php
require_once('includes/connection.php');
include_once('includes/header.php');

$sql = "SELECT * FROM doneeFundraiserIndv";
$allFundraisers = $connection->query($sql);
?>
<main>
    <h3><b>Featured Topics..</b></h3>
    <div class="grid-donations">
        <?php
        while ($row = mysqli_fetch_assoc($allFundraisers)) {
            ?>
            <div class="card">
                <div class="image">
                    <img src="<?php echo $row["storyImages"]; ?>" alt="image" height="250px" width="250px">
                </div>
                <div class="caption">
                    <p class="progressBar">
                    </p>
                    <p class="title">
                        <?php echo $row["title"]; ?>
                    </p>
                    <p class="amount"><b>
                            <?php echo $row["requiredAmount"]; ?>
                        </b></p>
                    <p class="owner">
                            <?php echo $row["story"]; ?>
                        </p>
                </div>
                <button class="blue-button">Donate</button>
            </div>

            <?php
        }
        ?>
    </div>
</main>
<?php
include('includes/footer.php');
mysqli_close($connection);
?>