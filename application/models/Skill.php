<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
Class Skill extends CI_Model {
    function __construct() {
        parent::__construct();
    }
 
    function getData() {
        $this->db->select('*');
        $this->db->where('use_yn','Y');
        $this->db->from('skill');
        return $this->db->get()->result_array();
    }

}
