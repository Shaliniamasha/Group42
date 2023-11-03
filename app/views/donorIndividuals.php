<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Individual Donors</title>

  <link href="">
  <link rel="stylesheet" href="h_style7.css">
  <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
<style>

.dashDetails {
    display: flex;
    justify-content: space-between;
}

</style>

</head>
<body>
  
  <div class="side-nav">
    <a href="#" class="logo">
      <img src="LogoBlack.png" alt="" class="LOGO-img">
    </a>
    <ul class="nav-links">
      <li><a href="<?php echo URLROOT ?>/admin/admindash"><i class="fa-brands fa-windows"></i><p>Dashboard</p></a></li>
      <li><a href="<?php echo URLROOT ?>/admin/admindoneeindv"><i class="fa-solid fa-people-group"></i><p>Individual Donees</p></a></li>
      <li><a href="<?php echo URLROOT ?>/admin/admindonorindv"><i class="fa-solid fa-people-group"></i><p>Individual Donors</p></a></li>
      <li><a href="<?php echo URLROOT ?>/admin/admindonororg"><i class="fa-solid fa-people-group"></i><p>Donor Organizations</p></a></li>
      <li><a href="<?php echo URLROOT ?>/admin/admindoneeorg"><i class="fa-solid fa-people-group"></i><p>Donee Organizations</p></a></li>
      <li><a href="<?php echo URLROOT ?>/admin/adminfund_act"><i class="fa-solid fa-table"></i><p></p>Fundraisers</a></li>
      <li><a href="<?php echo URLROOT ?>/admin/admindonations"><i class="fa-solid fa-table"></i></i><p>Donations</p></a></li>
      <li><a href="<?php echo URLROOT ?>/admin/adminstory_act"><i class="fa-solid fa-table"></i><p></p>Stories</a></li>
      <li><a href="<?php echo URLROOT ?>/admin/adminaddadmin"><i class="fa-solid fa-user"></i><p>Add an admin</p></a></li>
      <li><a href="<?php echo URLROOT ?>/admin/admin"><i class="fa-solid fa-right-from-bracket"></i><p>Log out</p></a></li>
      <div class="active"></div>
    </ul>
  </div>

  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <i class="fa-solid fa-bars"></i>
        <span>Individual Donors</span>
      </div>
      <div class="user--info">
        <div class="search--box">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search Name"/>
        </div>  
      </div>
     
    </div>

<body>
<div class="container">
    <div class="table-wrapper">
      <table>
        <thead>
          <tr>
            <th>id</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <span>
                <span class="fi fi-af"></span>
              </span>
              <span>001</span>
            </td>
            <td>janith</td>
            <td>janith001@gmail.com</td>
            <td>A@3ghd</td>
            <td>0</td>
          </tr>
          <tr>
            <td>
              <span>
                <span class="fi fi-al"></span>
              </span>
              <span>002</span>
            </td>
            <td>shalini</td>
            <td>shalini@002gmail.com</td>
            <td>V@3ghd</td>
            <td>0</td>
          </tr>
          <tr>
            <td>
              <span>
                <span class="fi fi-dz"></span>
              </span>
              <span>003</span>
            </td>
            <td>sanduni</td>
            <td>sanduni@003gmail.com</td>
            <td>S@3ghd</td>
            <td>0</td>
          </tr>
          <tr>
            <td>
              <span>
                <span class="fi fi-al"></span>
              </span>
              <span>004</span>
            </td>
            <td>bhagya</td>
            <td>bhagya@004gmail.com</td>
            <td>B@3ghd</td>
            <td>0</td>
          </tr>
        </tbody>
      </table>


    
</body>
</html>