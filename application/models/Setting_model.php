<?php

class Setting_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public $tableName = "settings";

    public function getAll()
    {
        return $this->db->get($this->tableName)->result();
    }
    public function update($id, $data = array())
    {
        return $this->db->where("id", $id)->update($this->tableName, $data);
    }
}
