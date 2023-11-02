<?php

require APPROOT . '/helpers/session_helper.php';
require APPROOT . '/helpers/error_msg.php';
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
            'regNo'=> trim($_POST['regNo']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'confirmpassword' => trim($_POST['confirmpassword']),
            'type' => ('Org'),
            'status' =>('0')
        ];

        //validate inputs
        if (empty($data['username']) || empty($data['regNo'])|| empty($data['email']) || empty($data['password']) || empty($data['confirmpassword'])) {
            flash("signup", "Please fill out all inputs");
            redirect(URLROOT . '/OrgUsers');
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            flash("signup", "Invalid email");
            redirect(URLROOT . '/OrgUsers');
        }

        if (strlen($data['password']) < 6) {
            flash("signup", "Invalid password");
            redirect(URLROOT . '/OrgUsers');
        } else if ($data['password'] !== $data['confirmpassword']) {
            flash("signup", "Passwords don't match");
            redirect(URLROOT . '/OrgUsers');
        }

        //User with the same email or username already exists
        if ($this->orgUser->findUserByEmailOrUsername($data['email'], $data['username'])) {
            flash("signup", "Username or email already taken");
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