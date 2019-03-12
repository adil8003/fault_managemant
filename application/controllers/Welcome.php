<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        $this->load->view('login');
    }



}
