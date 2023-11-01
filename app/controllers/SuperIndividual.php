<?php
class SuperIndividual extends controller
{
    private $superIndividualModel;

    public function __construct()
    {
        $this->superIndividualModel = $this->model('M_superIndividual');
    }

    public function index()
    {  
        if($_POST){
            $this->signup();
        } 
        else {     
        $this->view('V_SuperIndvSignup');
        }
        
    }
    public function signup()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'username' => trim($_POST['username']),
            'nic' => trim($_POST['nic']),
            'nic_image' => trim($_POST['nic_image']),
            'bank_code' => trim($_POST['bank_code']),
            'bank_name' => trim($_POST['bank_name']),
            'branch_code' => trim($_POST['branch_code']),
            'branch_name' => trim($_POST['branch_name']),
            'bank_pbook' => trim($_POST['bank_pbook']),
        ];

        //validate inputs
        if (empty($data['username']) || empty($data['nic']) || empty($data['nic_image']) || empty($data['bank_code']) || empty($data['bank_name']) || empty($data['branch_code']) || empty($data['branch_name'])) {
            flash("signup", "Please fill out all inputs");
            redirect(URLROOT . '/SuperIndividual');
        }

        if (!preg_match("/^[a-zA-Z0-9]*$/", $data['username'])) {
            flash("signup", "Invalid Full Name");
             redirect(URLROOT . '/SuperIndividual');
        }

        

        

        //User with the same nic or passwordz already exists
        if ($this->superIndividualModel->findUserByEmailOrUsername($data['nic'], $data['username'])) {
            flash("signup", "Already registered");
            redirect(URLROOT . '/Donations/home');
        }

       

        if ($this->superIndividualModel ->register($data)) {
            redirect(URLROOT . '/StartFund');
        } else {
            die("Something went wrong");
        }

    }
    


}
?>