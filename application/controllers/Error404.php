<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {
    var $lib_dir = '';
    public function __construct()
    {
        parent::__construct();
        $this->lib_dir = $this->config->item('lib_dir'); 
    }

    public function index(){
        $data = array(
            'title' => 'JEON BYEONG JIN',
            'lib_dir'=> $this->lib_dir
        );
		$this->load->view('common/header',$data);
		$this->load->view('common/navigation');
		$this->load->view('main');
		$this->load->view('common/footer');
    }

}