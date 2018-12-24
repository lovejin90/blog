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
            'title' => 'JEON BYEONG JIN',
            'lib_dir'=> $this->lib_dir
        );
		$this->load->view('common/header',$data);
		$this->load->view('common/navigation');
		$this->load->view('main');
		$this->load->view('common/footer');
    }
 
    public function about()
	{
        $data = array(
            'title' => 'About',
            'lib_dir'=> $this->lib_dir
        );
        $this->load->view('common/header',$data);
		$this->load->view('common/navigation');
		$this->load->view('about');
		$this->load->view('common/footer');
    }
    
    public function skill()
	{
        $data = array(
            'title' => 'Skill',
            'lib_dir'=> $this->lib_dir
        );
        $this->load->view('common/header',$data);
		$this->load->view('common/navigation');
		$this->load->view('skill');
		$this->load->view('common/footer');
	}
}
