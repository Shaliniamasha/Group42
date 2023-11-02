<?php
class Merchandise extends controller
{
    private $MerchandiseModel;
    public function __construct()
    {
        $this->MerchandiseModel = $this->model('M_Merchandise');
  
    }


    // public function index(){

    //     $this->view('V_Merch');
    public function index(){
        if($_POST){
            $this->Merchform();
        } 
        else { 
        $this->view('V_Merch');
        }

  }




  public function MerchForm()
  {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
          'p_title' => trim($_POST['p_title']),
          'p_stock' => trim($_POST['p_stock']),
          'p_price' => trim($_POST['p_price']),
          'p_description' => trim($_POST['p_description']),
          'p_colour1' => trim($_POST['p_colour1']),
          'p_colour2' => trim($_POST['p_colour2']),
          'p_colour3' => trim($_POST['p_colour3']),
          'p_colour4' => trim($_POST['p_colour4']),
          'p_title' => trim($_POST['p_title']),];
      //validate inputs
      // if (empty($data['requiredAmount']) || empty($data['storyImages']) || empty($data['title']) || empty($data['story']) || empty($data['requirementEndDate'])) {
      //     flash("signup", "Please fill out all inputs");
      //     redirect(URLROOT . '/StartFund');
      // }

      if ($this->MerchandiseModel ->merch($data)) {
          redirect(URLROOT . '/Merchandise'); 
      } else {
          die("Something went wrong");
      }
  }
}
?>