<?php require APPROOT . '/views/includes/login_header.php' ?>

<div class="right-col">
   <div class="login">


      <form method="post" action="login/login" class="login__form">
         <h1 class="login__title">Login</h1>

         <div class="login__content">
            <div class="login__box">
               <i class="ri-user-3-line login__icon"></i>
               <!-- <input type="hidden" name="type" value="test"> -->
               <div class="login__box-input">
                  <input type="text" required class="login__input" name="username/email" placeholder="">
                  <label for="" class="login__label">Username or email<span class="required">*</span> </label>
               </div>
            </div>

            <div class="login__box">
               <i class="ri-lock-2-line login__icon"></i>

               <div class="login__box-input">
                  <input type="password" required class="login__input" name="password" id="login-pass" placeholder=" ">
                  <label for="" class="login__label">Password<span class="required">*</span></label>
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
            Don't have an account? <a href="<?php echo URLROOT ?>/login">Register</a>
         </p>
      </form>
   </div>

   <!--=============== MAIN JS ===============-->
   <!-- <script src="assets/js/main.js"></script> -->

</div>
</div>
</body>

</html>