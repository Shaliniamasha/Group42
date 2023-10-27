<?php

include_once('../helpers/session_helper.php');

flash('login');

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>GIVE4GOOD</title>
   <!--link rel="stylesheet" href="./css/new.css"-->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

   <link rel="stylesheet" href="../public/css/new.css">

</head>

<body>
   <main>
      <div class="login-container">
         <div class="left-col">
            <div class="horizontal-border"></div>
            <div class="container2">
               <div class="vertical-border"></div>
               <div class="login-image"></div>
            </div>
            <div class="horizontal-border"></div>
         </div>
         <div class="right-col">
            <div class="login">


               <form method="post" action="../controllers/individualDonors.php" class="login__form">
                  <h1 class="login__title">Login</h1>

                  <div class="login__content">
                     <div class="login__box">
                        <input type="hidden" name="type" value="login">
                        <i class="ri-user-3-line login__icon"></i>

                        <div class="login__box-input">
                           <input type="text" required class="login__input" name="username/email" placeholder="">
                           <label for="" class="login__label">Username or email </label>
                        </div>
                     </div>

                     <div class="login__box">
                        <i class="ri-lock-2-line login__icon"></i>

                        <div class="login__box-input">
                           <input type="password" required class="login__input" name="password" id="login-pass" placeholder=" ">
                           <label for="" class="login__label">Password</label>
                           <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                        </div>
                     </div>
                  </div>

                  <div class="login__check">
                     <div class="login__check-group">
                        <input type="checkbox" class="login__check-input">
                        <label for="" class="login__check-label">Remember me</label>
                     </div>

                     <a href="#" class="login__forgot">Forgot Password?</a>
                  </div>

                  <button type="submit" class="login__button">Login</button>

                  <p class="login__register">
                     Don't have an account? <a href="signup.php">Register</a>
                  </p>
               </form>
            </div>

            <!--=============== MAIN JS ===============-->
            <script src="assets/js/main.js"></script>

         </div>
      </div>
   </main>
</body>

</html>