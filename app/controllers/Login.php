<?php
require APPROOT . '/helpers/session_helper.php';

require APPROOT . '/helpers/error_msg.php';


class Login extends controller
{
    private $LogUser;
    public function __construct()
    {
        $this->LogUser = $this->model('M_users');

      
    }

    public function index(){
        if($_POST){
            $this->login();
        } 
        else { 
        $this->view('V_login');
        }

    }

    
    
    public function login()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


       

        $usernameOrEmail=trim($_POST['username/email']);
        $password=trim($_POST['password']);

        if (empty($usernameOrEmail) || empty($password)) {
            flash("login", "Please fill out all inputs");
            redirect(URLROOT . '/Login');
        }


        //Check for user/email
        if ($this->LogUser ->validateLogin($usernameOrEmail, $usernameOrEmail)) {
            //User Found
            $loggedInUser = $this->LogUser->login($usernameOrEmail, $password);
            if ($loggedInUser) {
                //Create session
                $this->createUserSession($loggedInUser);
            } else {
                flash("login", "Password Incorrect");
                redirect(URLROOT . '/Login');
            }
        } else {
                       flash("login", "No user found");
            redirect(URLROOT . '/Login');
        }
    }

    public function createUserSession($user){
        $_SESSION['userId'] = $user->id;
        $_SESSION['userName'] = $user->username;
        $_SESSION['userEmail'] = $user->email;
        $_SESSION['userType'] = $user->type;
        $_SESSION['userStatus'] = $user->status;


        redirect(URLROOT . '/Donations/home');

    }

    public function logout(){
        unset ($_SESSION['userId']);
        unset($_SESSION['userName']);
        unset($_SESSION['userEmail']);
        unset ($_SESSION['userType']);        
        unset ($_SESSION['userStatus']);
        session_destroy();
        redirect(URLROOT . '/Donations/home');
    }
}


?>