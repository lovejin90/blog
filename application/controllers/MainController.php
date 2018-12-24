<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {
    var $lib_dir = '';
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
        $this->load->library('lib');
        $this->lib_dir = $this->config->item('lib_dir'); 
    }

	public function index()
	{
        $data = array(
            'title' => 'main page',
            'lib_dir'=> $this->lib_dir
        );
		$this->load->view('common/header',$data);
		$this->load->view('common/navigation');
		$this->load->view('main');
		$this->load->view('common/footer');
    }

    public function test()
	{
        var_dump('dsfdasf');
        $data = array(
            'title' => 'main page'
        );
		$this->load->view('test',$data);
	}
}
