<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admindashboard extends CI_Controller {

    function __construct() {
        parent::__construct();

//        Utils::no_cache();
//        if (!$this->session->userdata('id')) {
//            redirect(base_url('auth/login'));
//            exit;
//        }
        $this->load->helper('url');
//        $this->session_user = $this->session->userdata('id');
    }

    public function index() {
        $this->load->view('admin/home');
//          redirect(base_url('site/login'));
    }
    public function customer() {
        $this->load->view('admin/customer');
//          redirect(base_url('site/login'));
    }


}
