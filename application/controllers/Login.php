<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->session_data = $data['session_data'] = $this->session->userdata('logged_in');
        if($data['session_data']){
            redirect(base_url()."home");
        }
    }

    public function index() {
        $data['session_info'] = $this->session_data;
        
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('pwd', 'Password', 'required|callback_check_login', array('required' => 'You must provide a %s.'));

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('header', $data);
            $this->load->view('login');
            $this->load->view('footer');
        } else {
            redirect(base_url() . 'home');
        }
    }

    public function check_login() {
        $username = $this->input->post('email');
        $password = $this->input->post('pwd');

        $res = $this->Commondb->login_check($username);

        if ($res) {
            foreach ($res as $value) {
                
            }

            if ($value['pwd'] == $password) {

                $name = $value['fname'] . " " . $value['lname'];

                $sess_array = array(
                    'name' => $name,
                    'user_id' => $value['id'],
                    'role_id' => $value['user_role'],
                    'email' => $value['email']
                );

                $this->session->set_userdata('logged_in', $sess_array);
                return true;
            } else {
                $this->form_validation->set_message('check_login', 'Username / Password Wrong');
                return false;
            }
        } else {
            $this->form_validation->set_message('check_login', 'Username / Password Wrong');
            return false;
        }
    }

}
