<?php  
	
	/**
	* 
	*/
	class student_model extends CI_Model {
		
		function __construct() {
			parent::__construct();

			$this->load->database();
			$this->load->library('session');
		}
		function getStudent(){
			$sql = "SELECT student_id, student_name, username, student_class, student_num
					FROM student
					WHERE username = '{$_SESSION['username']}';
			";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
	}
?>