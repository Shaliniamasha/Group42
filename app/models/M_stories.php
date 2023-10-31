<?php

class M_stories
{
    private $db;
    private $table = 'stories';
    public function __construct()
    {
        $this->db = new Database;
        

    }

    public function getStories() 
    {
        $this->db->query('SELECT * FROM stories');
        
        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function deleteStory($id){
        $field='id';
        $this->db->delete($this->table,$field, $id);

    }

}