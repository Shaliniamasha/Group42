<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
<style>


*
{
  margin :0;
  padding : 0;
  box-sizing:border-box;
  font-family: 'Brawler', serif;
  font-family: 'Poppins', sans-serif;
  font-family: 'Roboto', sans-serif;
}

body{
  display: flex; 
}


.side-nav{
 width:300px;
 height: 100vh;
 background: #dee3e7;
 position: sticky;
 top: 0;
 left: 0;
 padding: 20px 30px;
 

}
.logo{
display: block;
margin-bottom: 20px;
padding-left: 35px;

}
.LOGO-img{
  width: 150px;

}
.nav-links{
  list-style: none;
  position: relative;
  
}
.nav-links li{
  padding: 10px;
}

.nav-links li a{
  padding: 3px 14px;
  color: black;
  text-decoration: none;
  display: flex;
  align-items: center;
}
.nav-links li a i{
  font-size: 18px;
  margin-right: 20px;
}

.active{
  background: #FCF4EC;
  width: 100%;
  height: 45px;
  position: absolute;
  left: 0;
  top: 0;
  z-index: -1;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(255 255 255 0.4);
  display: none;
  transition: 0.5s;
}
.nav-links li:hover a{
  color: #4874eef7; 
  transition: 0.3s;
 
}
.nav-links li:hover ~ .active{
  display: block; 
  transition: 0.3s;
}

.nav-links li:nth-child(1):hover ~ .active{
   top: 0;
}

.nav-links li:nth-child(2):hover ~ .active{
  top: 11.1%;
}

.nav-links li:nth-child(3):hover ~ .active{
  top:22.2%;
}
.nav-links li:nth-child(4):hover ~ .active{
  top:33.3%;
}
.nav-links li:nth-child(5):hover ~ .active{
  top:44.4%;
}
.nav-links li:nth-child(6):hover ~ .active{
  top:55.5%;
}
.nav-links li:nth-child(7):hover ~ .active{
  top:66.6%;
}
.nav-links li:nth-child(8):hover ~ .active{
  top:77.7%;
}
.nav-links li:nth-child(9):hover ~ .active{
  top:88.8%;
}

@media only screen and (max-width: 600px) {
  .side-nav{
    width: 125px;
  }
  .LOGO-img{
    display: none;
  }
  .nav-links li a p{
    display: none;
  }
  nav-links li a i{
    margin-right: 0;
  }
  nav-links li a {
   justify-content: center;
  }
}

/* main body setion */

.main--content{
  position: relative;
  background:#f0f2f4 ;
  width: 80%;
  padding: 1rem;
}
.header--wrapper img{
  width: 40px;
  height: 40px;
  cursor: pointer;
  border-radius: 50%;
  margin-left: 0%;
  

}
.header--wrapper {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  background-color: #fff;
  border-radius: 10px;
  padding: 10px 2rem;
  margin-bottom: 1rem;
}

.header--title{
  color: #000000;
  
}

.user--info{
  display: flex;
  align-items: center;
  gap: 1rem;
}
.search--box{
  background-color: rgb(237, 237, 237);
  border-radius: 15px;
  color: rgba(113, 99, 186, 255);
  display: flex;
  align-items: center;
  gap: 5px;
  padding: 4px 12px ;
  margin-bottom: 8px;
  margin-left: 200px;
}
.search--box input{
  background: transparent;
  padding: 10px;
  outline: none;
}

.search--box i{
  font-size: 1.2rem;
  cursor: pointer;
  transition: 0.5s ease-out;
}
.search--box i:hover{
  transform: scale(1.2);
}
.search--box input{
  border: 1px solid rgb(237, 237, 237);
  
}

.dashDetails{
  background: #fff;
  padding: 1rem;
  border-radius: 10px;
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
  padding-bottom: 290px;

}
.dashUnit1{
  margin-left: 0.01rem;
  margin-top: 1rem;
  background: rgb(245, 243, 243);
  padding: 1rem;
  border-radius: 2rem; 
}

.client{
  background: rgb(214, 212, 212);
  padding: 10px;
  border-radius: 5px;
  margin-top: 0.6rem;
  margin-bottom: 2rem;
  align-items: center;
  
}

.dashUnit2{
  margin-left: 8rem;
  margin-top: 1rem;
  background: rgb(245, 243, 243);
  padding: 3rem;
  border-radius: 2rem;
  box-shadow: 5px 5px 5px -1px rgba(45, 123, 183, 0.16),
  -7px -7px 5px -1px rgba(2255, 255, 255, 0.7);
}
.completed{
  background: rgb(214, 212, 212);
  padding: 10px;
  border-radius: 5px;
  margin-top: 0.6rem;
  margin-bottom: 2rem;
}
.ongoing{
  background: rgb(214, 212, 212);
  padding: 10px;
  border-radius: 5px;
  margin-top: 0.6rem;
  margin-bottom: 1rem;
}
.table{
  background: #fff;
  padding: 10px;
  border-radius: 5px;
  margin-top: 0.6rem;
  margin-bottom: 0.6rem;
  
}
table{
  width: 100%;
  border-collapse: collapse;
  
}

tbody{
  background: #fff(249, 246, 246);
  
}

td{
  padding: 10px;
  font-size: 14px;
  color: black;
}

tr:nth-child(odd){
  background: rgb(234, 232, 232);
}
.table button{   
    cursor: pointer;
    color: #489bee;
    border: none;
    font-weight: bold;
}
.viewall{
  background-color: #489bee;
  padding: 7px;
  width: 100px;
  margin-top: 20px;
  margin-left: 100px;
  cursor: pointer;
  text-align: center;
  border-radius: 20px;
}

.table-wrapper {
  overflow-x: auto;
}

.table-wrapper::-webkit-scrollbar {
  height: 8px;
}

.table-wrapper::-webkit-scrollbar-thumb {
  background: var(--darkblue);
  border-radius: 40px;
}

.table-wrapper::::-webkit-scrollbar-track {
  background: var(--white);
  border-radius: 40px;
}

.table-wrapper table {
  margin: 50px 0 20px;
  border-collapse: collapse;
  text-align: center;
}

.table-wrapper table th,
.table-wrapper table td {
  padding: 10px;
  min-width: 75px;
}

.table-wrapper table th {
  color: var(--white);
  background: var(--darkblue);
}

.table-wrapper table tbody tr:nth-of-type(even) > * {
  background: var(--lightblue);
}

.table-wrapper table td:first-child {
  display: grid;
  grid-template-columns: 25px 1fr;
  grid-gap: 10px;
  text-align: left;
}

.table-credits {
  font-size: 12px;
  margin-top: 10px;
}

.dashDetails {
    display: flex;
    justify-content: space-between;
}

</style>
</head>

<body>
  
  <div class="side-nav">
    <a href="#" class="logo">
      <img src="public/Assets/images/LogoBlack.png" alt="" class="LOGO-img">
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