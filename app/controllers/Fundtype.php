<?php
class FundType extends controller
{
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model');

    
    // }

    // public function index(){

    // }

    public function index(){
        if ($_SESSION['userStatus'] == 0){
            $this->view('V_frType');
        } else if ($_SESSION['userStatus'] == 1){
            // Add code specific to 'Org' user type
            $this->view('orgView'); // For example, displaying a view for organizations
            // Other actions specific to organizations
        }
    }
    
    
    public function Moneyclass(){
        $this->view('V_selectTypeInd');
    }

    public function Materialclass(){
        $this->view('V_materialDonInd');
    }
    // public function Merchclass(){
    //     $this->view('V_Merch');
    // }



}
?>