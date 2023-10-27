<?php

require_once('../models/storyModel.php');
class storiesController
{

    private $displayStoriesModel;

    public function __construct()
    {
        $this->displayStoriesModel = new stories;
    }

    

    public function displayStories()
    {
        $donations = $this->displayStoriesModel -> getStories();
        
        include '../views/stories.php';
    }
}
$init = new storiesController;

$init->displayStories();
