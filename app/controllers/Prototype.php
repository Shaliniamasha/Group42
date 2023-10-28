<?php
class Prototype extends controller
{
    public function __construct()
    {
        $this->prototypeModel = $this->model('M_model');

    
    }

    public function index(){

    }

    public function home(){
        $this->view('admin-home');
}
}
?>