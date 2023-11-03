<?php
class M_superIndividual {
    private $db;
    public function __construct() 
    {
        $this->db = new Database;
    }

    public function findUserByEmailOrUsername($nic, $username){
        $this->db->query('SELECT * FROM indv_donee WHERE username = :username OR nic = :nic');
        $this->db->bind(':username', $username);
        $this->db->bind(':nic', $nic);

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    public function register($data){
        $this->db->query('INSERT INTO indv_donee (username, nic, nic_image, bank_code, bank_name, branch_code, branch_name, bank_pbook) 
        VALUES (:username, :nic, :nic_image, :bank_code, :bank_name, :branch_code, :branch_name, :bank_pbook) 
        )');
        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':nic', $data['nic']);
        $this->db->bind(':nic_image', $data['nic_image']);
        $this->db->bind(':bank_code', $data['bank_code']);
        $this->db->bind(':bank_name', $data['bank_name']);
        $this->db->bind(':branch_code', $data['branch_code']);
        $this->db->bind(':branch_name', $data['branch_name']);
        $this->db->bind(':bank_pbook', $data['bank_pbook']);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

   

}