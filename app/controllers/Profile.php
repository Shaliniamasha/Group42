<?php

require APPROOT . '/helpers/error_msg.php';  
class Profile extends controller
{
    private $StoryModel;
    
    private $FundModel;
    
    private $MerchModel;
    
    private $LocationModel;
    public function __construct()
    {
        
        // $this->StoryModel = $this->model('M_stories');
        // $this->FunModel = $this->model('M_donation');
        // $this->LocationModel = $this->model('M_Location');
        // $this->MerchModel = $this->model('M_merchandise');

        // $data = $this->StoryModel -> oneStory();

    }




    public function index()
    {
        if (isset($_SESSION['userId'])) {
            if ($_SESSION['userType'] == 0) 
            {
                if ($_SESSION['userStatus'] == 1) 
                {
                //    redirect(URLROOT . '/TempUsers');
                } 
                else if ($_SESSION['userStatus'] == 0) 
                {
                    redirect(URLROOT . '/TempUsers');
                }
            } else if ($_SESSION['userType'] == 1) {
                if ($_SESSION['userStatus'] == 1) {
                    $this->view('VP_doneeOrg');
                } else if ($_SESSION['userStatus'] == 0) {
                    $this->view('VP_donorOrg');
                }
            }
        } else {
            $this->view('Signup');
        }

    }

    public function superOrg()
    {
        $this->view('VP_doneeOrg');
    }
    public function Org()
    {
        $this->view('VP_donorOrg');
    }
    public function superIndv()
    {
        $this->view('VP_doneeIndv');
    }
    public function Indv()
    {
        $this->view('VP_donorIndv');
    }
}

?>