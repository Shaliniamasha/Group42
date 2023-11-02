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
        if ($_SESSION['userType'] == 'Indv'){
        $this->view('V_frType');
    }
    else if ($_SESSION['userType'] == 'Org'){

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