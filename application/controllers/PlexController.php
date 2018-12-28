<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlexController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('simplexml');
        $this->load->library('lib');
        $this->load->model('plexMediaFeed');
        $this->lib_dir = $this->config->item('lib_dir'); 
    }

	public function index()
	{
        $url = 'http://plex.lovejin90.com';
        $token = 'D9jqEeF7xrTPMgGP2C6F';
        $category = array (
            'movie' => 21
        );

        $data = array(
            'title' => ' :: PLEX 최신업데이트현황',
            'lib_dir'=> $this->lib_dir,
            'movieData' => $this->plexMediaFeed->getFeed($url,$token,$category,5)
        );
        var_dump($data['movieData']);
		$this->load->view('plex-update',$data);
    }

}