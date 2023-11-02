<?php
class M_individualUser {
    private $db;
    public function __construct() 
    {
        $this->db = new Database;
    }

    public function findUserByEmailOrUsername($email, $username){
        $this->db->query('SELECT * FROM individualdonor WHERE username = :username OR email = :email');
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

    public function register($data){
        $this->db->query('INSERT INTO individualdonor (username, email, password, type, status) 
        VALUES (:username, :email, :password, :type, :status)');
        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':status', $data['status']);


        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

   

}