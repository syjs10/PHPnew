<?php  
	/**
	* 
	*/
	class Student extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->helper('url');
			
		}
		public function display($page) {
			$this->ci_smarty->assign('base_url', base_url());
			$this->ci_smarty->display('template/header.tpl');
			$this->ci_smarty->display($page);
		}
		public function showInformation() {
			$this->display('student/showInformation.html');
		} 
		public function showAllCourse(){
			redirect('course/showAllCourse');
		}
	}
?>