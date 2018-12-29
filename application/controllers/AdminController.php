<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
    var $lib_dir = '';
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
        $this->load->library('lib');
        $this->load->model('auth');
        $this->lib_dir = $this->config->item('lib_dir'); 
        $this->load->library('encrypt');
    }

    public function index(){
        // $user_id = 'admin';
        // $user_pw = 'rookie2316';
        // $auth_data = array(
        //     'user_id' => $user_id,
        //     'user_pw' => $user_pw
        // );
        // $result = $this->auth->login($auth_data);
        // var_dump($result);
        // exit;
        $data = array(
            'title' => 'JEON BYEONG JIN',
            'lib_dir'=> $this->lib_dir
        );
		$this->load->view('common/header',$data);
		$this->load->view('admin/index');
		$this->load->view('common/footer');
    }

    public function gate(){
        $data = array(
            'title' => 'JEON BYEONG JIN',
            'lib_dir'=> $this->lib_dir
        );
		$this->load->view('common/header',$data);
		$this->load->view('common/navigation');
		$this->load->view('admin/gate');
		$this->load->view('common/footer');
    }


}