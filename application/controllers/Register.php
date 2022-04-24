<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
    }
    public function index()
    {
        $this->load->view('register');
    }
    public function registerUser()
    {
        $insert =  $this->user_model->insert(array(
            "firstName" => $this->input->post("firstName"),
            "lastName" =>  $this->input->post("lastName"),
            "email" => $this->input->post("email"),
            "password" =>  $this->input->post("password"),

        ));
        if ($insert) {
            redirect(base_url('register?status=true'));
        } else {
            redirect(base_url('register?status=false'));
        }
    }
}
