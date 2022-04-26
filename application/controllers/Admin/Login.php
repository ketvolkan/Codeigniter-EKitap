<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view("admin/login/login");
    }

    public function checkUser()
    {
        $this->load->model("admin_model");
        $email = $this->input->post("email");
        $password = $this->input->post("password");
        $admin = $this->admin_model->getByEmailAndPassword($email, $password);
        if ($admin[0] != null) {
            $this->session->set_userdata("AdminUserId", $admin[0]->id);
            $this->session->set_userdata("AdminUserFirstName", $admin[0]->firstName);
            $this->session->set_userdata("AdminUserLastName", $admin[0]->lastName);
            $this->session->set_userdata("AdminUserEmail", $admin[0]->email);
            $this->session->set_userdata("AdminUserPassword", $admin[0]->password);
            redirect(base_url("/Admin/Panel"));
        } else {
            redirect(base_url("Admin/Login?status=false"));
        }
    }
    public function LogOut()
    {
        $this->session->sess_destroy();
        redirect(base_url("Admin/Login"));
    }
}
