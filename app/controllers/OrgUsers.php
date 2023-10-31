<?php

require APPROOT . '/helpers/session_helper.php';
class OrgUsers extends controller
{

    private $orgUser;

    public function __construct()
    {
        $this->orgUser = $this->model('M_orgUser');
    }

    public function index()
    {  
        if($_POST){
            $this->signup();
        } 
        else {     
        $this->view('V_orgSignup');
        }
        
    }

    
    public function signup()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'username' => trim($_POST['username']),
            'type' => trim($_POST['type']),
            'regNo'=> trim($_POST['regNo']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'confirmpassword' => trim($_POST['confirmpassword'])
        ];

        //validate inputs
        if (empty($data['username']) || empty($data['type']) || empty($data['regNo'])|| empty($data['email']) || empty($data['password']) || empty($data['confirmpassword'])) {
            flash("register", "Please fill out all inputs");
            redirect(URLROOT . '/OrgUsers');
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            flash("register", "Invalid email");
            redirect(URLROOT . '/OrgUsers');
        }

        if (strlen($data['password']) < 6) {
            flash("register", "Invalid password");
            redirect(URLROOT . '/OrgUsers');
        } else if ($data['password'] !== $data['confirmpassword']) {
            flash("register", "Passwords don't match");
            redirect(URLROOT . '/OrgUsers');
        }

        //User with the same email or username already exists
        if ($this->orgUser->findUserByEmailOrUsername($data['email'], $data['username'])) {
            flash("register", "Username or email already taken");
            redirect(URLROOT . '/OrgUsers');
        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        if ($this->orgUser ->register($data)) {
            redirect(URLROOT . '/Login');
        } else {
            die("Something went wrong");
        }

    }

    

}