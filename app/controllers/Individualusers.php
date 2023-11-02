<?php

require APPROOT . '/helpers/session_helper.php';
require APPROOT . '/helpers/error_msg.php';
class Individualusers extends controller
{

    private $individualUser;

    public function __construct()
    {
        $this->individualUser = $this->model('M_individualUser');
    }

    public function index()
    {  
        if($_POST){
            $this->signup();
        } 
        else {     
        $this->view('V_indvSignup');
        }
        
    }

    
    public function signup()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'username' => trim($_POST['username']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'confirmpassword' => trim($_POST['confirmpassword']),
            'type' => 'Indv',
            'status' =>'0'
        ];

        //validate inputs
        if (empty($data['username']) || empty($data['email']) || empty($data['password']) || empty($data['confirmpassword'])) {
            flash("signup", "Please fill out all inputs");
            redirect(URLROOT . '/Individualusers');
        }

        if (!preg_match("/^[a-zA-Z0-9]*$/", $data['username'])) {
            flash("signup", "Invalid username");
             redirect(URLROOT . '/Individualusers');
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            flash("register", "Invalid email");
            redirect(URLROOT . '/Individualusers');
        }

        if (strlen($data['password']) < 6) {
            flash("register", "Invalid password");
            redirect(URLROOT . '/Individualusers');
        } else if ($data['password'] !== $data['confirmpassword']) {
            flash("register", "Passwords don't match");
            redirect(URLROOT . '/Individualusers');
        }

        //User with the same email or password already exists
        if ($this->individualUser->findUserByEmailOrUsername($data['email'], $data['username'])) {
            flash("register", "Username or email already taken");
            redirect(URLROOT . '/Individualusers');
        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        if ($this->individualUser ->register($data)) {
            redirect(URLROOT . '/Login');
        } else {
            die("Something went wrong");
        }

    }

    

}


