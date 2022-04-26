<?php

class Admin_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public $tableName = "admins";


    public function getByEmailAndPassword($email, $password)
    {
        $array = array('email' => $email, 'password' => $password);
        return $this->db->where($array)->get($this->tableName)->result();
    }
    public function update($id, $data = array())
    {
        return $this->db->where("id", $id)->update($this->tableName, $data);
    }
    public function getById($id)
    {

        return $this->db->where("id", $id)->get($this->tableName)->result();
    }
}
