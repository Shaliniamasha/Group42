<?php
class TempUsers extends controller
{
    private $storyModel;
    public function __construct()
    {
        $this->storyModel = $this->model('M_stories');
  
    }


    public function index() {
        $id = $_SESSION['userId'];
        $stories = $this->storyModel->StoryTitles($id);
        $this->view('VP_donorIndv', $stories);
    }
    
    
}
?>