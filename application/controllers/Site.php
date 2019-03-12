<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

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
//          redirect(base_url('site/login'));
        redirect(base_url('login'));
    }

    public function forgetPassword() {
        $this->load->view('forget-password');
    }
    public function home() {
        $this->load->view('home');
    }

}
