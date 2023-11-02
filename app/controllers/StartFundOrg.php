<?php
class StartFundOrg extends controller
{
    // private $prototypeModel;
    // public function __construct()
    // {
    //     $this->prototypeModel = $this->model('M_model');

    
    // }

    // public function index(){

    // }

    public function index(){
        $this->view('V_selectTypeOrg');
}


public function Healthclass(){
    $this->view('Common');
}

public function Houseclass(){
    $this->view('Common');
}

public function Educationclass(){
    $this->view('Common');
}

public function Sportclass(){
    $this->view('Common');
}

public function Environmentclass(){
    $this->view('Common');
}

public function Communityclass(){
    $this->view('Common');
}

public function NaturalDisasterclass(){
    $this->view('Common');
}

public function Animalclass(){
    $this->view('Common');
}

// public function Commonclass(){
//     $this->view('Common');
// }




}
?>