<?php

class Subscriber
{
    private $db;

    public function __construct()
    {
        $this->db = new DB;
    }
    public function add($subscriberForm)
    {
        $sql = "INSERT INTO subscribers 
        (first_name, last_name, phone, email, birthdate, country, image) 
        values 
        (:fname, :lname, :phone, :email, :birthdate, :country, :image)";

        $this->db->query($sql);

        $this->db->bind(':fname', $subscriberForm['fname']);
        $this->db->bind(':lname', $subscriberForm['lname']);
        $this->db->bind(':phone', $subscriberForm['phone']);
        $this->db->bind(':email', $subscriberForm['email']);
        $this->db->bind(':birthdate', $subscriberForm['birthdate']);
        $this->db->bind(':country', $subscriberForm['country']);
        $this->db->bind(':image', $subscriberForm['image']);

        return $this->db->execute();
    }
}
