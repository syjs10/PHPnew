<?php  
	/**
	*  
	*/
	class Login_model extends CI_Model {
		
		function __construct() {
			parent::__construct();
			$this->load->database();
		}
		function login_match ($database, $arr) {
			return $this->db->get_where('teacher', $arr)->row_array();
		}
	}
?>