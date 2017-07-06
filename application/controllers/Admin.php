<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $this->load->view('admin/index');
    }

    public function login() {
        $this->load->library('parser');

        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        $this->parser->parse('admin/login',$data);
    }
}
