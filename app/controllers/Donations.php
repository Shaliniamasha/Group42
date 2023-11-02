<?php

class Donations extends controller
{
    private $displayDonations;
    private $donations;

    
    public function __construct()
    {
        $this->displayDonations = $this->model('M_donation');
    }

    

    public function home()
    {
        $data = $this->displayDonations -> getDonations(); 
        
        $this->view('V_index', $data);
}


public function FundraiserView($id)
    {
        $data = $this->displayDonations -> oneFundraiser($id); 
        
        $this->view('V_Fundraiser', $data);
}
}
?>
