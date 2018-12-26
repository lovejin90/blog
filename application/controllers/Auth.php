<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
        $this->load->helper('form');
        $this->load->library('encrypt');
    }

    public function index(){
        $this -> login();
    }

    // public function _remap($method) {
    //     $this->load->view('header_v');
    //     if (method_exists($this, $method)) {
    //         $this -> {"{$method}"}();
    //     }
    //     $this->load->view('footer_v');
    // }

/**
     * 로그인 처리
     */
    public function login() {
        $this -> load -> library('form_validation');
        $this -> load -> helper('alert');
        $this -> form_validation -> set_rules('username', '아이디', 'required|alpha_numeric');
        $this -> form_validation -> set_rules('password', '비밀번호', 'required');

        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
 
        if ($this -> form_validation -> run() == TRUE) {
            $auth_data = array(
                'user_id' =>$this->encrypt->encode($this->input->post('username', TRUE));,
                'user_pw' => $this->input->post('password', TRUE)
            );
            $result = $this->auth->login($auth_data);
            var_dump($result);
            if ($result) {
                $newdata = array(
                    'username' => $result->username,
                    'email' => $result->email,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);
                alert('로그인 되었습니다.', '/admin/');
                exit;
            } else {
                alert('아이디나 비밀번호를 확인해 주세요.', '/gate/');
                exit;
            }
        } else {
            $this->load->view('/gate/');
        }
    }
 
    public function logout() {
        $this->load->helper('alert');
        $this->session->sess_destroy();
        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        alert('로그아웃 되었습니다.', '/gate/');
        exit;
    }

}