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
.header--buttons {
      display: flex;
    }

    .header--buttons button {
      background-color: rgb(63, 170, 247); /* Blue background color */
      color: rgb(0, 0, 0); /* White text color */
      padding: 15px 30px; /* Larger padding for a larger button */
      border: none;
      cursor: pointer;
      margin-right: 10px; /* Add some spacing between the buttons */
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
      <li><a href="<?php echo URLROOT ?>/admin/admindash"><i class="fa-brands fa-windows"></i><p>Dashboard</p></a></li>
      <li><a href="<?php echo URLROOT ?>/admin/admindoneeindv"><i class="fa-solid fa-people-group"></i><p>Individual Donees</p></a></li>
      <li><a href="<?php echo URLROOT ?>/admin/admindonorindv"><i class="fa-solid fa-people-group"></i><p>Individual Donors</p></a></li>
      <li><a href="<?php echo URLROOT ?>/admin/admindonororg"><i class="fa-solid fa-people-group"></i><p>Donor Organizations</p></a></li>
      <li><a href="<?php echo URLROOT ?>/admin/admindoneeorg"><i class="fa-solid fa-people-group"></i><p>Donee Organizations</p></a></li>
      <li><a href="<?php echo URLROOT ?>/admin/adminfund_act"><i class="fa-solid fa-table"></i><p></p>Fundraisers</a></li>
      <li><a href="<?php echo URLROOT ?>/admin/admindonations"><i class="fa-solid fa-table"></i></i><p>Donations</p></a></li>
      <li><a href="<?php echo URLROOT ?>/admin/adminstoryact"><i class="fa-solid fa-table"></i><p></p>Stories</a></li>
      <li><a href="<?php echo URLROOT ?>/admin/adminaddadmin"><i class="fa-solid fa-user"></i><p>Add an admin</p></a></li>
      <li><a href="<?php echo URLROOT ?>/admin/admin"><i class="fa-solid fa-right-from-bracket"></i><p>Log out</p></a></li>
      <div class="active"></div>
    </ul>
  </div>

  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <i class="fa-solid fa-bars"></i>
        <span>Donee Organizations</span>
      </div>
      <div class="header--buttons">
        <a href="<?php echo URLROOT ?>/admin/admindoneeorg_deact"><button class="deactivated-button">Deactivated</button></a>
        <a href="<?php echo URLROOT ?>/admin/admindoneeorg_pend"></a><button class="pending-button">Pending</button></a>
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
                  <th>about</th>
                  <th>contact</th>
                  <th>address</th>
                  <th>reg_cer_img</th>
                  <th>logo</th>
                  <th>cover_img</th>
                  <th>bank_code</th>
                  <th>bank_name</th>
                  <th>branch_code</th>
                  <th>branch_name</th>
                  <th>bank_acc_no</th>
                  <th>bank_pbook</th>
                  <th>executive_name</th>
                  <th>executive_nic</th>
                  <th>executive_address</th>
                  <th>executive_contact</th>
                  <th>executive_email</th>
                  <th>executive_nic_img</th>
                  <th>treasurer_name</th>
                  <th>treasurer_nic</th>
                  <th>treasurer_address</th>
                  <th>treasurer_contact</th>
                  <th>treasurer_email</th>
                  <th>Actions</th>
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
                  <td>Non-profit organization</td>
                  <td>0112458654</td>
                  <td>No 78, Galle Rd, Dehiwala</td>
                  <td>regcer.jpg</td>
                  <td>logo1.jpg</td>
                  <td>1255</td>
                  <td>sampath</td>
                  <td>78</td>
                  <td>colombo07</td>
                  <td>7276464</td>
                  <td>janithpb.png</td>
                  <td>1</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="fa-solid fa-lock fa-lg"></i></td>
                </tr>
                
              </tbody>
            </table>
      </body>

</html>
