<?php
class FundTypeOrg extends controller
{
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model');

    
    // }

    // public function index(){

    // }

    public function index(){
        if ($_SESSION['userType'] == 0){
            $this->view('V_frType');
        } else if ($_SESSION['userType'] == 1){
            // Add code specific to 'Org' user type
            $this->view('V_frTypeOrg'); // For example, displaying a view for organizations
            // Other actions specific to organizations
        }
        $this->view('V_frTypeOrg');
    }

    public function Moneyclass(){
        $this->view('V_selectTypeOrg');
    }

    public function Materialclass(){
        $this->view('V_materialDonInd');
    }

    
    public function Merchclass(){
        $this->view('V_Merch');
    }



}
?>