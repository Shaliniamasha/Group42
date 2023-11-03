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

    public function StoryTitles($id) {
        $this->db->query("SELECT title FROM stories WHERE id = :id");
        $this->db->bind(':id', $id);
        $rows = $this->db->resultSet();
    
        if ($rows) {
            $titles = array_column($rows, 'title');
            return $titles;
        } else {
            return false;
        }
    }
    
    

    public function oneStory($id){
        $row=$this->db->selectOne("stories", "id", "$id", 1);
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
        
    }

    public function AStory($id){
        $row=$this->db->selectOne("stories", "id", "$id", 1);
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