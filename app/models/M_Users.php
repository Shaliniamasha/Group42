<?php

class M_users
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function checkTable($email, $username, $table){
        $this->db->query('SELECT * FROM '.$table.' WHERE username = :username OR email = :email');
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }

    }

    public function validateLogin($email, $username) {
        $tables = ['orgusers', 'admin', 'individualdonor'];
        foreach ($tables as $table) {
            $row = $this->checkTable($email, $username, $table);
            
            if ($row !== false) {
                return $row; // User found in a table, return the user data
            }
        }
        
        return false; // User not found in any table
    }

    public function login($usernameOrEmail, $password){
        $row = $this->validateLogin($usernameOrEmail, $usernameOrEmail);

        if($row == false) return false;

        $hashedPassword = $row->password;
        if(password_verify($password, $hashedPassword)){
            return $row;
        }else{
            return false;
        }
    }


}