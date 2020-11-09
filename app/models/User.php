<?php

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new DB;
    }
    public function add($userForm)
    {
        $sql = "INSERT INTO users 
        (name, email, password, is_admin, phone, postal_code, address) 
        values 
        (:name, :email, :password, :is_admin, :phone, :postal_code, :address)";

        $this->db->query($sql);

        $this->db->bind(':name', $userForm['name']);
        $this->db->bind(':email', $userForm['email']);
        $this->db->bind(':password', $userForm['password']);
        $this->db->bind(':is_admin', $userForm['is_admin']);
        $this->db->bind(':phone', $userForm['phone']);
        $this->db->bind(':postal_code', $userForm['postal_code']);
        $this->db->bind(':address', $userForm['address']);

        return $this->db->execute();
    }

    public function logIn($username, $password)
    {
        $sql = "SELECT * FROM users 
        WHERE email = :email 
        AND password = :password";

        $this->db->query($sql);

        $this->db->bind(":email", $username);
        $this->db->bind(":password", $password);

        return $this->db->single();
    }
}
