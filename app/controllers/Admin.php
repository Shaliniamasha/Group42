<?php

require APPROOT . '/helpers/session_helper.php';
require APPROOT . '/helpers/error_msg.php';
class Admin extends controller
{

    private $admin;

    // public function __construct()
    // {
    //     $this->admin = $this->model('M_admin');
    // }

   

    public function home()
    {
        $this->view('admin_dashboard');
    }

    public function indo()
    {
        $this->view('indone');
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

