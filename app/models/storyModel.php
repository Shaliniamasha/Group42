<?php

require_once('../config/connection.php');
class stories
{
    private $db;
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
}