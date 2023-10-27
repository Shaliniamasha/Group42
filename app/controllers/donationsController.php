<?php

require_once('../models/donationModel.php');
class donationsController
{

    private $displayDonationsModel;

    public function __construct()
    {
        $this->displayDonationsModel = new donations;
    }

    

    public function displayDonations()
    {
        $donations = $this->displayDonationsModel -> getDonations();
        
        include '../views/index.php';
    }
}
$init = new donationsController;

$init->displayDonations();
