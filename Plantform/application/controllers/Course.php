<?php  
	/**
	* 
	*/
	class Course extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->model('course_model');
			$this->load->helper('url');
		}
		public function display($page) {
			$this->ci_smarty->assign('base_url', base_url());
			$this->ci_smarty->display('template/header.tpl');
			$this->ci_smarty->display($page);
		}
		public function show_course() {
			$course_info = $this->course_model->get_course();
			foreach ($course_info as $key => $value) {
				$course_info[$key]['img_path']=base_url("../src/{$value['img_path']}");
				if (mb_strlen($value['course_introduction'])>=38) {
					$course_info[$key]['course_introduction']=mb_substr($value['course_introduction'],0,38)."...";
				}
			}
			// print_r($course_info);
			$this->ci_smarty->assign('course_info', $course_info);
			$this->display('course/showCourse.php');
		}
	}
?>