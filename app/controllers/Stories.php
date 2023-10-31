<?php
class Stories extends controller
{

    private $displayStories;
    private $stories;

    public function __construct()
    {
        $this->displayStories = $this->model('M_stories');
    }


    public function displayStories()
    {
        $data = $this->displayStories -> getStories();
        
        $this->view('V_stories', $data);
    }

    public function removeStory($id)
    {
        if ($this->model('M_stories')->deleteStory($id) === false) {
        echo 'unsuccessfull';
    }
    else{
        echo 'successfull';
    }
}
}
?>
