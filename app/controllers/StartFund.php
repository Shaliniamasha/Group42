<?php
class StartFund extends controller
{
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model');

    
    // }

    public function index(){
        $this->view('V_selectTypeInd');
    }

    public function Healthclass(){
        $this->view('Health');
    }

    public function Houseclass(){
        $this->view('House');
    }

    public function Educationclass(){
        $this->view('Education');
    }

    public function Sportclass(){
        $this->view('Sport');
    }
}
?>