<?php

class Coach extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->session_data = $data['session_data'] = $this->session->userdata('logged_in');
    }

    public function index() {
        
    }

    public function profile($id, $status = null) {

        $data['session_info'] = $this->session_data;
        $data['profile'] = $this->Commondb->getCoach($id);
        $data['reviews'] = $this->Commondb->getCoachReviews($id);
        $data['status'] = $status;

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->form_validation->set_rules('rating_comments', 'Comment', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header', $data);
            $this->load->view('coach', $data);
            $this->load->view('footer');
        } else {
            
            $avg_rating = ($this->input->post('motivation_rating') + $this->input->post('technical_skills_rating') + $this->input->post('punctuality_rating') + $this->input->post('communication_rating')) / 4;            
            
            $data_submit = array(
                'coach_id' => $id,
                'user_id' => $data['session_info']['user_id'],
                'avg_rating' => $avg_rating,
                'motivation' => $this->input->post('motivation_rating'),
                'technical_skills' => $this->input->post('technical_skills_rating'),
                'punctuality' => $this->input->post('punctuality_rating'),
                'communication' => $this->input->post('communication_rating'),
                'comments' => $this->input->post('rating_comments')                
            );
            
            $this->Commondb->insertRow($data_submit, 'ratings');
            redirect(base_url() . "coach/profile/" . $id . "/1");    
            
        }
    }

}
