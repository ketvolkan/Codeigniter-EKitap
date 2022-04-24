<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BookDetail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("book_model");
    }

    public function index()
    {
        $viewData = [];
        $this->load->view('book_detail', $viewData);
    }
}
