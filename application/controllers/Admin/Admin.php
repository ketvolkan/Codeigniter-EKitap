<?php

class Admin extends CI_Controller
{
    public $viewFolder = array();
    public function __construct()
    {
        parent::__construct();
        array_push($this->viewFolder, "Admin");
        $this->load->model("admin_model");
        if ($this->session->userdata("AdminUserId") == null) redirect(base_url("Admin/Login"));
    }

    public function index()
    {
        array_push($this->viewFolder, "Bilgilerini Güncelle");
        $admin = $this->admin_model->getById($this->session->userdata("AdminUserId"));
        $viewData = [
            "viewFolder" => $this->viewFolder,
            "admin" => $admin[0],
        ];
        $this->load->view("admin/admin/update_admin", $viewData);
    }
    public function update()
    {
        $update = $this->admin_model->update(
            $this->session->userdata("AdminUserId"),
            array(
                "email"         => $this->input->post("email"),
                "firstName"         => $this->input->post("firstName"),
                "lastName"         => $this->input->post("lastName"),
                "password"   => $this->input->post("password"),
            )
        );
        if ($update) {
            $this->session->set_userdata("AdminUserFirstName", $this->input->post("firstName"));
            $this->session->set_userdata("AdminUserLastName", $this->input->post("lastName"));
            $this->session->set_userdata("AdminUserEmail", $this->input->post("email"));
            $this->session->set_userdata("AdminUserPassword", $this->input->post("password"));
            redirect(base_url("Admin/Admin/?status=true"));
        } else {
            redirect(base_url("Admin/Admin/?status=false"));
        }
    }
}
