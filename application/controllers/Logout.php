<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Logout
 *
 * @author User
 */
class Logout extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect(base_url() . "home", 'refresh');
    }

}
