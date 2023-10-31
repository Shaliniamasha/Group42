<?php
class Admin_home extends controller
{
    private $adminHome;
    public function __construct()
    {
        //$this->adminHome = $this->model('M_');

    
    }

    public function index(){
        $this->view('V_adminHome');
    }

}