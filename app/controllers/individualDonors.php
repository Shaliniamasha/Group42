<?php

require_once('../models/individualDonor.php');
require_once('../helpers/session_helper.php');
class individualDonors
{

    private $individualDonorsModel;

    public function __construct()
    {
        $this->individualDonorsModel = new IndividualDonor;
    }
    public function register()
    {
        //Process form

        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'username' => trim($_POST['username']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'confirmpassword' => trim($_POST['confirmpassword'])
        ];

        //validate inputs
        if (empty($data['username']) || empty($data['email']) || empty($data['password']) || empty($data['confirmpassword'])) {
            flash("register", "Please fill out all inputs");
            redirect("../../views/signup.php");
        }

        if (!preg_match("/^[a-zA-Z0-9]*$/", $data['username'])) {
            flash("register", "Invalid username");
            redirect("../../views/signup.php");
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            flash("register", "Invalid email");
            redirect("../../views/signup.php");
        }

        if (strlen($data['password']) < 6) {
            flash("register", "Invalid password");
            redirect("../../views/signup.php");
        } else if ($data['password'] !== $data['confirmpassword']) {
            flash("register", "Passwords don't match");
            redirect("../../views/signup.php");
        }

        //User with the same email or password already exists
        if ($this->individualDonorsModel->findUserByEmailOrUsername($data['email'], $data['username'])) {
            flash("register", "Username or email already taken");
            redirect("../views/signup.php");
        }

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        if ($this->individualDonorsModel->register($data)) {
            redirect("../views/login.php");
        } else {
            die("Something went wrong");
        }

    }

    public function login()
    {
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Init data
        $data = [
            'username/email' => trim($_POST['username/email']),
            'password' => trim($_POST['password'])
        ];

        if (empty($data['username/email']) || empty($data['password'])) {
            flash("login", "Please fill out all inputs");
            header("location: ../views/login.php");
            exit();
        }

        //Check for user/email
        if ($this->individualDonorsModel->findUserByEmailOrUsername($data['username/email'], $data['username/email'])) {
            //User Found
            $loggedInUser = $this->individualDonorsModel->login($data['username/email'], $data['password']);
            if ($loggedInUser) {
                //Create session
                $this->createUserSession($loggedInUser);
            } else {
                flash("login", "Password Incorrect");
                redirect("../views/login.php");
            }
        } else {
            flash("login", "No user found");
            redirect("../views/login.php");
        }
    }

    public function createUserSession($individualDonor){
        $_SESSION['usersId'] = $individualDonor->id;
        $_SESSION['usersName'] = $individualDonor->username;
        $_SESSION['usersEmail'] = $individualDonor->email;
        redirect("../views/index.php");
    }


}

$init = new individualDonors;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    switch ($_POST['type']) {
        case 'register':
            $init->register();
            break;
        case 'login':
            $init->login();
            break;
        default:
            redirect("../index.php");
    }
}