<?php
class Stories extends controller
{

    private $storyModel;
    private $stories;

    public function __construct()
    {
        $this->storyModel = $this->model('M_stories');
    }


    public function all()
    {
        $data = $this->storyModel->getStories();

        $this->view('V_stories', $data);
    }

    public function one()
    {
        $data = $this->storyModel->getStories();

        $this->view('V_stories', $data);
    }

    public function StoryView($id)
    {
        $data = $this->storyModel->oneStory($id);

        $this->view('V_StoryView', $data);
    }

    public function create()
    {
        if ($_POST) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'user_id' => $_SESSION['userId'],
                'title' => trim($_POST['title']),
                'description' => trim($_POST['description']),
                'contact' => trim($_POST['contact']),
                'type' => $_SESSION['']
            ];

            //validate inputs
            if (empty($data['title']) || empty($data['description'])) {
                flash("create", "Please fill out all required inputs");
                redirect(URLROOT . '/stories/create');
            }

            if ($this->storyModel->addStory($data)) {
                redirect(URLROOT . '/stories/all'); //profile view//
            } else {
                die("Something went wrong");
            }
        } else 
        {
            $this->view('V_createStory');
        }

    }

    public function remove($id)
    {
        if ($this->model('M_stories')->deleteStory($id) === false) {
            echo 'unsuccessfull';
        } else {
            echo 'successfull';
        }

        /*<?php echo URLROOT ?>/stories/remove/<?php echo $_SESSION['userId'] ?>*/
    }

    public function update($id)
    {
        if ($this->model('M_stories')->updateStory($id) === false) {
            echo 'unsuccessfull';
        } else {
            echo 'successfull';
           /* <?php echo URLROOT ?>/stories/update/<?php echo $_SESSION['userId'] ?>*/
        }
    }


}
?>