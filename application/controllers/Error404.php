<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {
    var $lib_dir = '';
    public function __construct()
    {
        parent::__construct();
        $this->lib_dir = $this->config->item('lib_dir'); 
        $this->load->library('rssparser');
    }

    public function index(){
        $data = array(
            'title' => 'JEON BYEONG JIN',
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

}