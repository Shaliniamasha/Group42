<?php

require APPROOT . '/helpers/session_helper.php';
class StartFund extends controller
{
    private $fundraiserModel;
    public function __construct()
    {
        $this->fundraiserModel = $this->model('M_donation');

    
    }

    public function index()
        {  
            if($_POST){
                $type = $_POST['type']=="Education";
                $this->FundraiserForm($_POST['type']);
            } 
            else if($_POST){
                $type = $_POST['type']=="Health";
                $this->FundraiserForm($_POST['type']);
            } 
            else if($_POST){
                $type = $_POST['type']=="Sport";
                $this->FundraiserForm($_POST['type']);
            } 
            else if($_POST){
                $type = $_POST['type']=="Housing";
                $this->FundraiserForm($_POST['type']);
            } 
            else {     
            $this->view('V_selectTypeInd');
            }
            
        }
    

    public function Healthclass(){
        $this->view('Health');
    }

    public function Houseclass(){
        $this->view('House');
    }

    public function Educationclass(){
        $this->view('Education');
    }

    public function Sportclass(){
        $this->view('Sport');
    }

    // public function Commonclass(){
    //     $this->view('Common');
    // }

    public function FundraiserForm($category)
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'requiredAmount' => trim($_POST['fr_target']),
            'storyImages' => trim($_POST['fr_image']),
            'title' => trim($_POST['fr_topic']),
            'story' => trim($_POST['fr_disc']),
            'requirementEndDate' => trim($_POST['selected_date']),
            'category' => trim($category)];
        //validate inputs
        // if (empty($data['requiredAmount']) || empty($data['storyImages']) || empty($data['title']) || empty($data['story']) || empty($data['requirementEndDate'])) {
        //     flash("signup", "Please fill out all inputs");
        //     redirect(URLROOT . '/StartFund');
        // }

        if ($this->fundraiserModel ->startfundraiser($data)) {
            redirect(URLROOT . '/Login'); //profile view//
        } else {
            die("Something went wrong");
        }
    }

}
?>