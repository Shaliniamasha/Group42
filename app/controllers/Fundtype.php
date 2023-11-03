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
        if (isset($_SESSION['userId']))
        {
            if ($_SESSION['userType'] == 0)
            {
                if ($_SESSION['userStatus'] == 1)
                {
                    $this->view('V_frType'); 
                }
                else if ($_SESSION['userStatus'] == 0)
                {
                    $this->view('V_SuperIndvSignup');
                }
            }
            else if ($_SESSION['userType'] == 1)
            {
                if ($_SESSION['userStatus'] == 1)
                {
                    $this->view('V_frTypeOrg');
                }
                else if ($_SESSION['userStatus'] == 0)
                {
                    $this->view('V_SuperOrgSignup');
                }
            }
        }
        else{
            $this->view('Signup');
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