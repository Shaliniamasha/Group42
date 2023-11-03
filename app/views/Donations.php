<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donations</title>

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

    .header--buttons button {
      background-color: rgb(63, 170, 247); 
      color: rgb(0, 0, 0);
      padding: 15px 30px; 
      border: none;
      cursor: pointer;
      margin-right: 10px; 
      border-radius: 20px;
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
        <span>Donations</span>
      </div>
      <div class="user--info">
        <div class="search--box">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search Name"/>
        </div>  
      </div>
     
    </div>
    <div class="container">
        <div class="table-wrapper">
        <table>
        <thead>
        <tr>
            <th>Donor ID</th>
            <th>Donor name</th>
            <th>Title</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>004</td>
            <td>Sujith</td>
            <td>-</td>
            <td>1,500</td>
        </tr>
    </table>  
</body>

</html>
