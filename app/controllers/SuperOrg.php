<?php
class SuperOrg extends controller
{
    private $superOrgModel;

    public function __construct()
    {
        $this->superOrgModel = $this->model('M_superOrg');
    }

    public function index()
    {  
        if($_POST){
            $this->signup1();
        } 
        else {     
        $this->view('V_SuperOrgSignup');
        }
        
    }
    public function signup1()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'about' => trim($_POST['about']),
            'contact' => trim($_POST['contact']),
            'address' => trim($_POST['address']),
            'bank_code' => trim($_POST['bank_code']),
            'bank_name' => trim($_POST['bank_name']),
            'branch_code' => trim($_POST['branch_code']),
            'branch_name' => trim($_POST['branch_name']),
            'bank_pbook' => trim($_POST['bank_pbook']),
        ];

        //validate inputs
        if (empty(empty($data['contact']) || empty($data['address']) || empty($data['bank_code']) || empty($data['bank_name']) || empty($data['branch_code']) || empty($data['branch_name']) ||  empty($data['bank_pbook']))) {
            flash("signup1", "Please fill out all required inputs");
            redirect(URLROOT . '/SuperOrg');
        }

        if (!preg_match("/^[a-zA-Z0-9]*$/", $data['contact'] || $data['bank_code'] ||$data['bank_name'] || $data['branch_code'] || $data['branch_name'])) {
            flash("signup1", "Invalid Inputs");
             redirect(URLROOT . '/SuperOrg');
        }

        //User with the same contact or fullname already exists
       
        // if ($this->superOrgModel->findUserByEmailOrUsername($data['contact'], $data['username'])) {
        //     flash("signup", "Already registered");
        //     redirect(URLROOT . '/Donations/home');
        // }

        if ($this->superOrgModel ->register1($data)) {
            redirect(URLROOT . '/StartFund/signup2');
        } else {
            die("Something went wrong");
        }

    }

    public function signup2()
    { 
        if ($_POST){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'executive_name' => trim($_POST['executive_name']),
            'executive_nic' => trim($_POST['executive_nic']),
            'executive_address' => trim($_POST['executive_address']),
            'executive_contact' => trim($_POST['executive_contact']),
            'executive_email' => trim($_POST['executive_email']),
            'executive_nic_img' => trim($_POST['executive_nic_img']),
            'treasurer_name' => trim($_POST['treasurer_name']),
            'treasurer_nic' => trim($_POST['treasurer_nic']),
            'treasurer_address' => trim($_POST['treasurer_address']),
            'treasurer_contact' => trim($_POST['treasurer_contact']),
            'treasurer_email' => trim($_POST['treasurer_email']),
            'treasurer_nic_img' => trim($_POST['treasurer_nic_img']),
            
        ];

        //validate inputs
        if (empty($data['executive_name']) || empty($data['executive_nic']) || empty($data['executive_address']) || empty($data['executive_contact']) || empty($data['executive_email']) || empty($data['treasurer_name']) ||  empty($data['treasurer_nic']) || empty($data['treasurer_address']) ||  empty($data['treasurer_contact']) || empty($data['treasurer_email']))
        {
            flash("signup2", "Please fill out all required inputs");
            redirect(URLROOT . '/SuperOrg/signup2');
        }
        if (!filter_var($data['executive_email'], FILTER_VALIDATE_EMAIL)) {
            flash("signup2", "Invalid Executive email");
            redirect(URLROOT . '/SuperOrg/signup2');
        }

        if (!filter_var($data['treasurer_email'], FILTER_VALIDATE_EMAIL)) {
            flash("signup2", "Invalid Treasurer email");
            redirect(URLROOT . '/SuperOrg/signup2');
        }

        if (!preg_match("/^[a-zA-Z0-9]*$/", $data['executive_name'] || $data['executive_nic'] ||$data['executive_address'] || $data['executive_contact'] || $data['treasurer_name'] || $data['treasurer_nic'] ||$data['treasurer_address'] || $data['treasurer_contact'])) {
            flash("signup2", "Invalid Inputs");
             redirect(URLROOT . '/SuperOrg/signup2');
        }
        //User with the same contact or fullname already exists
       
        // if ($this->superOrgModel->findUserByEmailOrUsername($data['contact'], $data['username'])) {
        //     flash("signup", "Already registered");
        //     redirect(URLROOT . '/Donations/home');
        // }
      if ($this->superOrgModel ->register2($data)) 
      {
        redirect(URLROOT . '/StartFund/StartFund');
    } else
     {
            die("Something went wrong");
        }

    
}
else
{
    $this->view('V_SuperOrgSignup');
}

  
    


}
}
?>