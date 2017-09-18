<?php

class Profile extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->session_data = $data['session_data'] = $this->session->userdata('logged_in');        
    }
    
    public function index() {
        $data['session_info'] = $this->session_data;
        $this->load->view('header', $data);
        $this->load->view('profile', $data);
        $this->load->view('footer');
    }
    
}
