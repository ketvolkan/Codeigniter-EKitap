<?php

class Setting extends CI_Controller
{
    public $viewFolder = array();
    public function __construct()
    {
        parent::__construct();
        array_push($this->viewFolder, "Ayarlar");
        $this->load->model("setting_model");
        if ($this->session->userdata("AdminUserId") == null) redirect(base_url("Admin/Login"));
    }

    public function index()
    {
        $settings = $this->setting_model->getAll();
        array_push($this->viewFolder, "Site Ayarları");
        $viewData = [
            "setting" => $settings[0],
            "viewFolder" => $this->viewFolder,
        ];
        $this->load->view("admin/setting/site_setting", $viewData);
    }
    public function update()
    {
        $update = $this->setting_model->update(
            1,
            array(
                "site_name"         => $this->input->post("site_name"),
                "navbar_title"         => $this->input->post("navbar_title"),
                "about_description"         => $this->input->post("about_description"),
                "footer"   => $this->input->post("footer"),


            )
        );
        if ($update) {
            redirect(base_url("Admin/Setting/?status=true"));
        } else {
            redirect(base_url("Admin/Setting/?status=false"));
        }
    }
}
