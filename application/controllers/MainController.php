<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {
    var $lib_dir = '';
    public function __construct()
    {
        parent::__construct();
        $this->load->library('rssparser');
        $this->load->library('lib');
        $this->lib_dir = $this->config->item('lib_dir'); 
    }

	public function index()
	{
        $url = 'https://load-map.com/rss';
         	// get feed

        $data = array(
            'title' => '',
            'lib_dir'=> $this->lib_dir
        );
        $mData = array(
            'rss' => $this->rssparser->set_feed_url('https://load-map.com/rss')->getFeed(6)
        );
 
		$this->load->view('common/header',$data);
		$this->load->view('common/navigation');
		$this->load->view('main',$mData);
		$this->load->view('common/footer');
    }
 
    public function about()
	{
        $data = array(
            'title' => ' :: About',
            'lib_dir'=> $this->lib_dir
        );
        $this->load->model('about');
        $pdata = $this->about->getProfile();
        
        $pdata['month'] = $this->lib->calc_date_month($pdata['birthday']);
        $mData = array(
            'pData' => $pdata,
            'qData' => $this->about->getQuestion($pdata['profile_id'])

        );
        $this->load->view('common/header',$data);
		$this->load->view('common/navigation');
		$this->load->view('about',$mData);
		$this->load->view('common/footer');
    }
    
    public function skill()
	{
        $data = array(
            'title' => ' :: Skill',
            'lib_dir'=> $this->lib_dir
        );

        $this->load->model('skill');
        $mData = array(
            'sData' => $this->skill->getData()
        );

        $this->load->view('common/header',$data);
		$this->load->view('common/navigation');
		$this->load->view('skill',$mData);
		$this->load->view('common/footer');
	}
}
