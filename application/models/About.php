<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
Class About extends CI_Model {
    function __construct() {
        parent::__construct();
    }
 
    function getProfile() {
        return $this->db->get('profile',1)->row_array();
    }

    function getQuestion($id){
        $this->db->select('*');
        $this->db->from('question');
        $this->db->where('profile_id',$id);
        return $this->db->get()->result_array();
    }
}
