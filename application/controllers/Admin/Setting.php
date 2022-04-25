<?php

class Setting extends CI_Controller
{
    public $viewFolder = array();
    public function __construct()
    {
        parent::__construct();
        array_push($this->viewFolder, "Ayarlar");
    }

    public function index()
    {
        array_push($this->viewFolder, "Site Ayarları");
        $viewData = [
            "viewFolder" => $this->viewFolder,
        ];
        $this->load->view("admin/setting/site_setting", $viewData);
    }
}
