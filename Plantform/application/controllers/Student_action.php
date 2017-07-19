<?php  

	/**
	* 
	*/
	class Student_action extends CI_Controller
	{
		
		function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('student_model');
			// $this->load->helper('form');
			// $this->load->library('form_validation');
		}
		/**
		 * 页面加入header显示方法
		 * @param  [type] $page [description]
		 * @return [type]       [description]
		 */
		public function display($page) {
			$this->ci_smarty->assign('base_url', base_url());
			$this->ci_smarty->display('template/header.tpl');
			$this->ci_smarty->display($page);
		}
		/**
		 * 显示学生信息页面
		 * @return [type] [description]
		 */
		public function showStudentInformation() {
			$studentData = $this->student_model->getStudent();
			// print_r($studentData);
			$this->ci_smarty->assign('data', $studentData[0]);
			$this->display('student/showInformation.html');
		}

		public function showStudentCourse(){
			$this->display('student/showCourse.html');

		}
	}
?>