<?php

require APPROOT . '/helpers/session_helper.php';
require APPROOT . '/helpers/error_msg.php';
class Admin extends controller
{

    private $admin;

    public function __construct()
    {
        $this->admin = $this->model('M_admin');
    }

    public function index()
    {  
        if($_POST){
            $this->signup();
        } 
        else {     
        $this->view('V_adminSignup');
        }
    }  
    
    public function admin_home(){
        $this->view('V_adminHome');
    }

    public function adminaddadmin(){
        $this->view('AdminaddAdmin');
    }

    public function admindash(){
        $this->view('Admindashboard');
    }
    
    public function admindonations(){
        $this->view('AdminDonations');
    }

    public function admindoneeindv_act(){
        $this->view('AdmindoneeIndividuals-active');
    }

    public function admindonee_deact(){
        $this->view('AdmindoneeIndividuals-deactivated');
    }

    public function admindonee_pend(){
        $this->view('AdmindoneeIndividuals-pending');
    }

    public function admindoneeindv(){
        $this->view('AdmindoneeIndividuals');
    }

    public function admindoneeorg_act(){
        $this->view('AdmindoneeOrganizations-active');
    }

    public function admindoneeorg_deact(){
        $this->view('dmindoneeOrganizations-deactived');
    }

    public function admindoneeorg_pend(){
        $this->view('dmindoneeOrganizations-pending');
    }

    public function admindoneeorg(){
        $this->view('AdmindoneeOrganizations');
    }

    public function admindonorindv(){
        $this->view('AdmindonorIndividuals');
    }

    public function admindonororg(){
        $this->view('AdmindonorOrganizations');
    }

    public function adminfund_act(){
        $this->view('AdminFundraisers-active');
    }

    public function adminfund_deact(){
        $this->view('AdminFundraisers-deactivated');
    }

    public function adminfund_pend(){
        $this->view('AdminFundraisers-pending');
    }

    public function adminstory_act(){
        $this->view('AdminStories-active');
    }

    public function adminstory_pend(){
        $this->view('AdminStories-pending');
    }

    public function signup()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'username' => trim($_POST['username']),
            'contact' => trim($_POST['contact']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'confirmpassword' => trim($_POST['confirmpassword'])
        ];

        //validate inputs
        if (empty($data['username']) || empty($data['contact']) ||empty($data['email']) || empty($data['password']) || empty($data['confirmpassword'])) {
            flash("register", "Please fill out all inputs");
            redirect(URLROOT . '/Admin');
        }

        if (!preg_match("/^[a-zA-Z0-9]*$/", $data['username'])) {
            flash("signup", "Invalid username");
             redirect(URLROOT . '/Admin');
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            flash("register", "Invalid email");
            redirect(URLROOT . '/Admin');
        }

        if (strlen($data['password']) < 6) {
            flash("register", "Invalid password");
            redirect(URLROOT . '/Admin');
        } else if ($data['password'] !== $data['confirmpassword']) {
            flash("register", "Passwords don't match");
            redirect(URLROOT . '/Admin');
        }

        //User with the same email or password already exists
        if ($this->admin->findUserByEmailOrUsername($data['email'], $data['username'])) {
            flash("register", "Username or email already taken");
            redirect(URLROOT . '/Admin');
        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        if ($this->admin ->register($data)) {
            redirect(URLROOT . '/Login');
        } else {
            die("Something went wrong");
        }

    }    

}

