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