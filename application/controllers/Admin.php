<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $this->load->view('admin/index');
    }

    public function login() {
        $this->load->library('parser');

        $username = $this->input->post('email');
        $password = $this->input->post('password');
        $hashedPassword = md5(sha1($password)); // password is password

        $data = array(
            'username' => $username,
            'hashedPassword' => $hashedPassword,
        );

        $this->parser->parse('admin/login',$data);
    }
}