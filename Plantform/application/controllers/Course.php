<?php  
	/**
	* 
	*/
	class Course extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->model('course_model');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');
			
		}
		public function display($page) {
			$this->ci_smarty->assign('base_url', base_url());
			$this->ci_smarty->display('template/header.tpl');
			$this->ci_smarty->display($page);
		}
		public function show_all_course() {
			$course_info = $this->course_model->get_course();
			foreach ($course_info as $key => $value) {
				$course_info[$key]['img_path']=base_url("../src/{$value['img_path']}");
				if (mb_strlen($value['course_introduction'])>=38) {
					$course_info[$key]['course_introduction']=mb_substr($value['course_introduction'],0,38)."...";
				}
			}
			$this->ci_smarty->assign('base_url', site_url());
			$this->ci_smarty->assign('course_info', $course_info);
			$this->display('course/showAllCourse.php');
		}
		public function show_all_t_course() {
			$course_info = $this->course_model->get_t_course($_SESSION['teacher_id']);
			foreach ($course_info as $key => $value) {
				$course_info[$key]['img_path']=base_url("../src/{$value['img_path']}");
				if (mb_strlen($value['course_introduction'])>=38) {
					$course_info[$key]['course_introduction']=mb_substr($value['course_introduction'],0,38)."...";
				}
			}
			$this->ci_smarty->assign('base_url', site_url());
			$this->ci_smarty->assign('course_info', $course_info);
			$this->display('course/showAllCourse.php');
		}
		public function show_course($course_id){
			$this->ci_smarty->assign('course_id', $course_id);
			$this->display('course/showCourse.php');
		}
		public function show_experiment($course_id){
			$this->display('course/showExperiment.php');
		}
	}
?>