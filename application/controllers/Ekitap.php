<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ekitap extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("book_model");
    }

    public function index()
    {
        //print_r($this->book_model->getAll());
        $books = $this->book_model->getAll();
        $viewData = [
            "books" => $books
        ];
        $this->load->view('ekitap', $viewData);
    }
}
