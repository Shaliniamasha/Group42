<?php

require_once('../config/connection.php');
class donations
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
}

