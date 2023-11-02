<?php
class Fundraiser extends controller
{
    private $FundraiserModel;
    // public function __construct()
    // {
    //     $this->FundraiserModel = $this->model('M_Fundraiser');

    
    // }

    public function index($id){
        $this->view('V_Fundraiser');
    }

    public function home(){
        $this->view('admin-home');
}
}
?>