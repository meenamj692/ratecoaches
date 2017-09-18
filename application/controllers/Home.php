<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->session_data = $data['session_data'] = $this->session->userdata('logged_in');
    }

    public function index() {
        $data['session_info'] = $this->session_data;
        $data['coaches'] = $this->Commondb->getCoaches();

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('search_value', 'Search Value', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header', $data);
            $this->load->view('home', $data);
            $this->load->view('footer');
        } else {
            $column = $this->input->post('column');
            $value = $this->input->post('search_value');
            redirect(base_url() . "home/search/" . $column . "/" . $value);
        }
    }

    public function search($coulmn, $value) {
        if ($coulmn == 'name') {
            $qry = "(u.fname LIKE '%" . urldecode($value) . "%' OR u.lname LIKE '%" . urldecode($value) . "%')";
        } else if ($coulmn == 'sport') {
            $qry = "(s.sport_name LIKE '%".urldecode($value)."%')";
        }
        $data['coaches'] = $this->Commondb->getSearchCoaches($qry);
        $data['session_info'] = $this->session_data;
        
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('search_value', 'Search Value', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header', $data);
            $this->load->view('home', $data);
            $this->load->view('footer');
        } else {
            $column = $this->input->post('column');
            $value = $this->input->post('search_value');
            redirect(base_url() . "home/search/" . $column . "/" . $value);
        }
        
    }

}
