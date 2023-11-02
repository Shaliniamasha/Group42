<?php require APPROOT . '/views/includes/header.php' ?>
<main> 
    <div class="home-image-container">
            <div class="homepage-image left">
                <div class="home-left-text-con">
                    <h1>Give a Little, Change a Lot.</h1>
                </div>
                <div class="home-left-image-con">
                    <img src="/give4good/public/Assets/images/home-left.png" alt="image" class="home-left-image">
                </div>
            </div>
            <div class="homepage-image right">
            <div class="donate_box">
                        <h1 class="price">Donate</h1>
                        <h5>Make a difference</h5>
                    </div>
            </div>
        </div>
    <div class=dash>
        <div class="side-nav">
    <a href="#" class="logo">
      <img src="LogoBlack.png" alt="" class="LOGO-img">
    </a>
    <ul class="nav-links">
      <li><a href="#"><i class="fa-solid fa-user"></i><p>Profile</p></a></li>
      <li><a href="#"><i class="fa-solid fa-people-group"></i><p>Categories</p></a>
        <li class="dropdown">
          <li><a href="#">Education</a></li>
          <li><a href="#">Sports</a></li>
          <li><a href="#">Housing</a></li>
          <li><a href="#">Health</a></li>
          <li><a href="#">Natural Disasters</a></li>
          <li><a href="#">Environment</a></li>
          <li><a href="#">Animals</a></li>
          <li><a href="#">Community</a></li>
      </li>
      <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i><p>Log out</p></a></li> 
      <div class="active"></div>
    </ul>
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
                <li><a href="<?php echo URLROOT ?>/fundraiser/<?php echo $donation->id ?>"> <button class="blue-button">Donate</button></a></li>
                       
               
            </div>
            <?php
        }
        ?>


    </div>
    <div>
    </div>
</main>
<?php require APPROOT . '/views/includes/footer.php' ?>