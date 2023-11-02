<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

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
      <li><a href="<?php echo URLROOT ?>/fundraiser/home>"><i class="fa-brands fa-windows"></i><p>Dashboard</p></a></li>
      <li><a href="doneeIndividuals.html"><i class="fa-solid fa-people-group"></i><p>Individual Donees</p></a></li>
      <li><a href="donorIndividuals.html"><i class="fa-solid fa-people-group"></i><p>Individual Donors</p></a></li>
      <li><a href="donorOrganizations.html"><i class="fa-solid fa-people-group"></i><p>Donor Organizations</p></a></li>
      <li><a href="doneeOrganizations.html"><i class="fa-solid fa-people-group"></i><p>Donee Organizations</p></a></li>
      <li><a href="Fundraisers-active.html"><i class="fa-solid fa-table"></i><p></p>Fundraisers</a></li>
      <li><a href="Donations.html"><i class="fa-solid fa-table"></i></i><p>Donations</p></a></li>
      <li><a href="Stories-active.html"><i class="fa-solid fa-table"></i><p></p>Stories</a></li>
      <li><a href="addAdmin.html"><i class="fa-solid fa-user"></i><p>Add an admin</p></a></li>
      <li><a href="addAdmin.html"><i class="fa-solid fa-right-from-bracket"></i><p>Log out</p></a></li>
      <div class="active"></div>
    </ul>
  </div>

  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <i class="fa-solid fa-bars"></i>
        <span>Dashboard</span>
      </div>
      <div class="user--info">
        <div class="search--box">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search Name"/>
        </div>  
      </div>
     
    </div>

      <div class="dashDetails">
        <div class="dashUnit1">
          <div class="client">
            <span>Pending Sign Ups<strong>  05</strong></span>
          </div>   
          <div class="table">
            <table>
            
          <tbody>
            <tr>           
              <td>RotractUOC</td>            
              <td><button>View</button></td>
            </tr>
            <tr>           
              <td>Friends98</td>            
              <td><button>View</button></td>
            </tr> 
            <tr>           
              <td>SAC</td>            
              <td><button>View</button></td>
            </tr>
            </tbody>
           </table>
           <div class="viewall">
              <button>View All</button>
            </div>
            </div>      
        </div>
        <div class="dashUnit1">
            <div class="client">
              <span>Pending Reactivations <strong>  13</strong></span>
            </div>
            <div class="table">
              <table>
              
            <tbody>
              <tr>           
                <td>SarathWK</td>            
                <td><button>View</button></td>
              </tr>
              <tr>           
                <td>KDPathma</td>            
                <td><button>View</button></td>
              </tr>
              <tr>           
                <td>MCGroup</td>            
                <td><button>View</button></td>
              </tr>
              </tbody>
             </table>
             <div class="viewall">
                <button>View All</button>
              </div>
              </div>      
          </div>
          <div class="dashUnit1">
            <div class="client">
              <span>Pending Fundraisers <strong>  13</strong></span>
            </div>   
            <div class="table">
              <table>
              
            <tbody>
              <tr>           
                <td>Educational help</td>            
                <td><button>View</button></td>
              </tr>
              <tr>           
                <td>Build a library</td>            
                <td><button>View</button></td>
              </tr>
              <tr>           
                <td>Help for building a house</td>            
                <td><button>View</button></td>
              </tr>
              </tbody>
             </table>
             <div class="viewall">
                <button>View All</button>
              </div>
              </div>      
          </div>
          <div class="dashUnit1">
            <div class="client">
              <span>Pending Stories <strong>  13</strong></span>
            </div>  
            <div class="table">
              <table>
              
            <tbody> 
              <tr>           
                <td>Blood Donation Camp</td>            
                <td><button>View</button></td>
              </tr>
              <tr>           
                <td>Request kidney</td>            
                <td><button>View</button></td>
              </tr>
              <tr>           
                <td>Health Camp</td>            
                <td><button>View</button></td>
              </tr>
              </tbody>
             </table>
             <div class="viewall">
                <button>View All</button>
              </div>
              </div>      
          </div>
      
      </div>
    </div>
   

</body>
</html>