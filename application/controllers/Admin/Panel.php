<?php

class Panel extends CI_Controller
{
    public $viewFolder = array();
    public function __construct()
    {
        parent::__construct();
        array_push($this->viewFolder, "Panel");
        if ($this->session->userdata("AdminUserId") == null) redirect(base_url("Admin/Login"));
    }

    public function index()
    {
        array_push($this->viewFolder, "Anasayfa");
        $viewData = [
            "viewFolder" => $this->viewFolder,
        ];
        $this->load->view("admin/dashboard_v", $viewData);
    }
}
