<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $this->load->view('home');
//          redirect(base_url('site/login'));
//        redirect(base_url('login'));
    }
    public function home2() {
        $this->load->view('home2');
//          redirect(base_url('site/login'));
//        redirect(base_url('login'));
    }

}
