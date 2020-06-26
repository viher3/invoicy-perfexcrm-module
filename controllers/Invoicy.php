<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Invoicy extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('index');
    }
}
