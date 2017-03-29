<?php  
	/**
	* 
	*/
	class Addcourse_model extends CI_Model {
		
		function __construct() {
			$this->load->database();
			$this->load->library('session');
			
		}
		function save_course($image = NULL) {
			$data = array(
						'course_name' => $this->input->post('course_name'),
						'course_introduction' =>$this->input->post('course_introduction'),
						'img_path' => $image,
						'teacher_id' =>$this->session->userdata('teacher_id')

					);
			return $this->db->insert('course', $data);
			
		}
	}
?>