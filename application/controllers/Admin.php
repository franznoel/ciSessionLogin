<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public $dsn = 'mysqli://root:root@localhost/ciSessionLogin?char_set=utf8&dbcollat=utf8_general_ci&cache_on=true&cachedir=/path/to/cache';

    public function index() {
        $this->load->view('admin/index');
    }

    public function login() {
        $this->load->library('parser');

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if ($email && $password) {
            $this->load->model('user');
            $user = $this->user->getUser($email,$password);
            print_r($user);


            // $data = array(
            //     'user' => $user,
            //     'email' => $email
            // );
            // $this->parser->parse('admin/login',$data);
        } else {
            $this->load->view('admin/login');
        }

    }

}