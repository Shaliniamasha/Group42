<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add an Admin</title>
  <link href="">
  <link rel="stylesheet" href="h_style7.css">
  <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
  <style>
    .dashDetails {
      display: flex;
      justify-content: space-between;
    }
    .header--buttons {
      display: flex;
    }
    

  </style>
</head>
<body>
    <div class="side-nav">
        <a href="#" class="logo">
          <img src="LogoBlack.png" alt="" class="LOGO-img">
        </a>
        <ul class="nav-links">
          <li><a href="dashboard.html"><i class="fa-brands fa-windows"></i><p>Dashboard</p></a></li>
          <li><a href="doneeIndividuals.html"><i class="fa-solid fa-people-group"></i><p>Individual Donees</p></a></li>
          <li><a href="donorIndividuals.html"><i class="fa-solid fa-people-group"></i><p>Individual Donors</p></a></li>
          <li><a href="donorOrganizations.html"><i class="fa-solid fa-people-group"></i><p>Donor Organizations</p></a></li>
          <li><a href="doneeOrganizations.html"><i class="fa-solid fa-people-group"></i><p>Donee Organizations</p></a></li>
          <li><a href="Fundraisers-active.html"><i class="fa-solid fa-table"></i><p></p>Fundraisers</a></li>
          <li><a href="Donations.html"><i class="fa-solid fa-table"></i></i><p>Donations</p></a></li>
          <li><a href="Stories-active.html"><i class="fa-solid fa-table"></i><p></p>Stories</a></li>
          <li><a href="addAdmin.html"><i class="fa-solid fa-user"></i><p>Add an admin</p></a></li>
          <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i><p>Log out</p></a></li>
          <div class="active"></div>
        </ul>
      </div>
      <div class="main--content">
        <div class="header--wrapper">
          <div class="header--title">
            <i class="fa-solid fa-bars"></i>
            <span>Add an admin</span>
          </div>
         
          <div class="user--info">
            <div class="search--box">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input type="text" placeholder="Search Name"/>
            </div>  
          </div>
         
        </div>
  <h3>Add an Admin</h3>
  <form>
    <label for="adminUsername">Admin Username:</label>
    <input type="text" id="adminUsername" name="adminUsername" required>

    <label for="adminPassword">Admin Password:</label>
    <input type="password" id="adminPassword" name="adminPassword" required>

    <button type="submit">Add Admin</button>
  </form>
</body>
</html>
