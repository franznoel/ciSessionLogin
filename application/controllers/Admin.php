<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public $dsn = 'mysqli://root:root@localhost/ciSessionLogin?char_set=utf8&dbcollat=utf8_general_ci&cache_on=true&cachedir=/path/to/cache';

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->library('session');
        $this->load->library('parser');

        if ($this->session->user) {
            $userData = $this->session->user;

            $data = array(
                'user' => $userData->username
            );

            $this->parser->parse('admin/index',$data);
        } else {
            redirect('http://localhost/admin/login');
        }
    }

    public function login() {
        $this->load->library('session');

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if ($email && $password) {
            $this->load->library('parser');
            $this->load->model('user');

            $user = $this->user->getUser($email,$password);
            $this->session->user = $user;

            if ($this->session->user) {
                redirect('http://localhost/admin');
            }
        } else {
            if ($this->session->user) {
                redirect('http://localhost/admin');
            }
            $this->load->view('admin/login');
        }

    }

}