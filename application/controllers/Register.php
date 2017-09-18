<?php

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->session_data = $data['session_data'] = $this->session->userdata('logged_in');
        if($data['session_data']){
            redirect(base_url()."home");
        }
    }

    public function index() {
        $data['session_info'] = $this->session_data;
        $this->load->view('header', $data);
        $this->load->view('register');
        $this->load->view('footer');
    }

    public function user() {
        $data['session_info'] = $this->session_data;
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('pwd', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header', $data);
            $this->load->view('register_user');
            $this->load->view('footer');
        } else {

            $user_data_array = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'user_role' => 1,
                'pwd' => $this->input->post('pwd'),
                'status' => 0,
                'created_time' => date("Y-m-d h:i:s")
            );
            $this->Commondb->insertRow($user_data_array, 'users');
            redirect(base_url() . "register/success/");
        }
    }

    public function coach() {
        $data['session_info'] = $this->session_data;
        $data['sports'] = $this->Commondb->getTableData('sports', array("status" => 0));

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('sport', 'Sport', 'required');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('pwd', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header', $data);
            $this->load->view('register_coach', $data);
            $this->load->view('footer');
        } else {

            $user_data_array = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'user_role' => 2,
                'sports' => $this->input->post('sport'),
                'pwd' => $this->input->post('pwd'),
                'status' => 0,
                'created_time' => date("Y-m-d h:i:s")
            );
            $this->Commondb->insertRow($user_data_array, 'users');
            redirect(base_url() . "register/success/");
        }
    }

    public function success() {
        $data['session_info'] = $this->session_data;
        $this->load->view('header', $data);
        $this->load->view('register_success');
        $this->load->view('footer');
    }

}
