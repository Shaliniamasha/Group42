<?php
class Prototype extends controller
{
    private $prototypeModel;
    public function __construct()
    {
        $this->prototypeModel = $this->model('M_model');

  
    }

    public function index(){

    }

    public function index(){
        $this->view('admin-home');
}
}
?>