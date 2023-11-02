<?php

class M_donation
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDonations() 
    {
        $this->db->query('SELECT * FROM doneeFundraiserIndv');

        $row = $this->db->resultSet();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }

    }


    //1don

    public function oneFundraiser($id){
        $row=$this->db->selectOne("doneeFundraiserIndv", "id", "$id", 1);
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
        
    }


    public function startfundraiser($data){
        $this->db->query('INSERT INTO doneefundraiserindv (requiredAmount, storyImages, title, story, requirementEndDate, category) 
        VALUES (:requiredAmount, :storyImages, :title, :story,  :requirementEndDate, :category)');
        //Bind values
        $this->db->bind(':requiredAmount', $data['requiredAmount']);
        $this->db->bind(':storyImages', $data['storyImages']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':story', $data['story']);
        $this->db->bind(':requirementEndDate', $data['requirementEndDate']);
        $this->db->bind(':category', $data['category']);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

}

