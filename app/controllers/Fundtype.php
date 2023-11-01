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
        $this->view('V_frType');
    }

    public function Moneyclass(){
        $this->view('V_selectTypeInd');
    }

    public function Materialclass(){
        $this->view('V_materialDonInd');
    }

}
?>