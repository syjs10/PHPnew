<?php  
	/**
	* 
	*/
	class Teacher_action extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');

		}
		public function display($page) {
			$this->ci_smarty->assign('base_url', base_url());
			$this->ci_smarty->display('template/header.tpl');
			$this->ci_smarty->display($page);
		}
		function addcourse() {
			$this->ci_smarty->assign('form', form_open('teacher_action/doadd',"enctype='multipart/form-data', class='form-horizontal'"));
			$this->display('teacher/addcourse.php');			
		}
		function doadd() {
			// print_r($_FILES);
			$this->form_validation->set_rules('course_name','课程名称', 'required');
			$this->form_validation->set_rules('course_introduction','课程介绍','required');
			if ($this->form_validation->run() == TRUE)
			{
				$this->load->library('upload_file');
				$test = $this->upload_file->do_img_upload();
				$this->load->model('addcourse_model');
				$result = $this->addcourse_model->save_course($test);
				if ($result==true) {
					echo "ok";
				} else {
					echo "no";
				}
				// $this->load->helper('html');
				// echo img(base_url("../".$test));
				
			}else{
				echo "row";
			}

		}
		public function test(){
				echo time();
		}
	}

?>