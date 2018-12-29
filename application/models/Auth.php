<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
Class Auth extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->library('encrypt');
    }
 
    /**
     * 아이디 비밀번호 체크
     *
     * @param array $auth 폼 전송받은 아이디, 비밀번호
     * @return array
     */
    function login($auth) {
        $sql = "SELECT user_id, user_pw,email FROM member WHERE user_id = '" . $auth['user_id']."'";
        $query = $this -> db -> query($sql);
        if ($query -> num_rows() > 0) {
            if ($this->encrypt->decode($query->row('user_pw')) === $auth['user_pw']){
                return $query -> row();
            }else{
                return false;
            }
        } else {
            return false;
        }
    }
}
