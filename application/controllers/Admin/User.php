<?php

class User extends CI_Controller
{
    public $viewFolder = array();
    public function __construct()
    {
        parent::__construct();
        array_push($this->viewFolder, "Kullanıcı İşlemleri");
        $this->load->model("user_model");
        if ($this->session->userdata("AdminUserId") == null) redirect(base_url("Admin/Login"));
    }
    public function index()
    {
        redirect(base_url("/Admin/User/Lists"));
    }
    public function lists()
    {
        array_push($this->viewFolder, "Tüm Kullanıcılar");
        $allUsers = $this->user_model->getAll();
        $viewData = [
            "viewFolder" => $this->viewFolder,
            "users" => $allUsers,
        ];
        $this->load->view("admin/user/list_user", $viewData);
    }
    public function delete()
    {
        $this->user_model->delete($this->input->get("id"));
        redirect(base_url("Admin/User/Lists"));
    }
}
