<?php 
require_once('includes/connection.php');
include('includes/header.php'); 
?>
    <main>
        <div class="home-image-container">
            <img src=" " alt="image">
            <h1>Start a Fundraiser</h1>
        </div>
    </main>
<?php 
include('includes/footer.php'); 
mysqli_close($connection); 
?>