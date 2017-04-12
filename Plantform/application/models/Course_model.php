<?php
	/**
	* 	完成课程的增删改查	
	*/
	class Course_model extends CI_Model	{
		
		function __construct() {
			parent::__construct();
			$this->load->database();
		}
		/**
		 * 获取课程信息
		 * @return [arr] [查询结果]
		 */
		public function get_course() {
			$sql="SELECT course_id, course_name, course_introduction, img_path, teacher_name 
					FROM course cs 
					JOIN teacher tr 
					ON cs.teacher_id = tr.teacher_id;";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function get_t_course($id) {
			$sql="SELECT *
					FROM course cs 
					JOIN teacher tr 
					ON cs.teacher_id = tr.teacher_id where cs.teacher_id=".$id.";";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

	}
?>
