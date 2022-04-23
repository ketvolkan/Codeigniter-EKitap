<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
    }
    public function index()
    {
        $this->load->view('login');
    }
    public function checkUser()
    {
        $email = $this->input->post("email");
        $password = $this->input->post("password");
        $user = $this->user_model->getByEmailAndPassword($email, $password);
        if ($user[0] != null) {
            $this->session->set_userdata("userId", $user[0]->id);
            $this->session->set_userdata("userFirstName", $user[0]->name);
            $this->session->set_userdata("userLastName", $user[0]->surname);
            $this->session->set_userdata("userEmail", $user[0]->email);
            $this->session->set_userdata("userPassword", $user[0]->password);
            redirect(base_url("/Ekitap"));
        } else {
            redirect(base_url("/Login?status=false"));
        }
    }
}
