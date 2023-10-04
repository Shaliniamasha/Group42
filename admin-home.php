<?php 
require_once('includes/connection.php');
include('includes/header.php'); 
?>
    <main>
        <h1>Signups</h1>
        <a href="donor_individual.php"><button class="blue-button">Donor Individual</button></a>
        <a href="donor_organization.php"><button>Donor Organization</button></a>
        <a href="donee_individual.php"><button>Donee Individual</button></a>
        <a href="donee_organization.php"><button>Donee Organization</button></a>
        <h1>Fundraisers</h1>
        <a href="All.php"><button>All</button></a>
        <a href="Active.php"><button>Active</button></a>
        <a href="Pending.php"><button>Pending</button></a>
        <a href="Deactivated.php"><button>Deactivated</button></a>
        <h1>Donations received</h1>
        <a href="Total.php"><button>Total</button></a>
        <a href="Financial.php"><button>Financial</button></a>
        <a href="Product selling.php"><button>Product selling</button></a>
        <a href="Give4Good.php"><button>Give4Good</button></a>
    </main>
<?php 
include('includes/footer.php'); 
mysqli_close($connection); 
?>