<?php

class M_merchandise
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }


    public function getMerchandise() 
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

    public function merch($data){
        $this->db->query('INSERT INTO merchandise (p_title, p_stock, p_price, p_description, p_colour1, p_colour2, p_colour3, p_colour4, p_image) 
        VALUES (:p_title, :p_stock, :p_price, :p_description, :p_colour1, :p_colour2, :p_colour3, :p_colour4, :p_image)');
        //Bind values
        $this->db->bind(':p_title', $data['p_title']);
        $this->db->bind(':p_stock', $data['p_stock']);
        $this->db->bind(':p_price', $data['p_price']);
        $this->db->bind(':p_description', $data['p_description']);
        $this->db->bind(':p_colour1', $data['p_colour1']);
        $this->db->bind(':p_colour2', $data['p_colour2']);
        $this->db->bind(':p_colour3', $data['p_colour3']);
        $this->db->bind(':p_colour4', $data['p_colour4']);
        // $this->db->bind(':p_image', $data['p_image']);



        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}