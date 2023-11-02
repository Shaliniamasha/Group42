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

    public function updateStory($id){
        $field='id';
        // $this->db->delete($this->table,$field, $id);

    }

    public function addStory($data){
        $this->db->query('INSERT INTO stories (user_id, title, description, contact, type, image, branch_name, bank_pbook) 
        VALUES (:user_id, :title, :description, :contact, :type, :image, :branch_name, :bank_pbook) 
        )');
        //Bind values
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':contact', $data['contact']);
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':image', $data['image']);
        
        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}