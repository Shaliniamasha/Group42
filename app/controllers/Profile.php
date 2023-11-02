<?php
class Profile extends controller
{
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model')
  
    //}


    public function DoneeProfileView(){

        $this->view('DoneeView');

    }
    public function DonorProfileView(){

        $this->view('DonorView');

    }
    public function OrganizationDoneeProfileView(){

        $this->view('OrganizationDoneeView');

    }
    public function OrganizationDonorProfileView(){

        $this->view('OrganizationDonorView');

    }
    public function PayNow(){

        $this->view('Payment');

    }
    public function Success(){

        $this->view('Successful');

    }
}
?>