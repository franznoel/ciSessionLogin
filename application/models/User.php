<?php


class User extends CI_Model {
    public $username;
    public $password;

    public function getUser($email, $password) {
        $this->load->database($this->dsn);
        $hashedPassword = md5(sha1($password)); // password is 'password'
        $q = "SELECT * FROM users WHERE username LIKE '". $email ."' AND password LIKE '" . $hashedPassword . "';";
        // echo $q;
        $query = $this->db->query($q);
        return $query->row();
    }

}