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
		public function addCourse() {
			$this->ci_smarty->assign('form', form_open('teacher_action/doAddCourse',"enctype='multipart/form-data', class='form-horizontal'"));
			$this->display('course/addCourse.php');
		}
		public function doAddCourse() {
			// print_r($_FILES);
			$this->form_validation->set_rules('course_name','课程名称', 'required');
			$this->form_validation->set_rules('course_introduction','课程介绍','required');
			if ($this->form_validation->run() == TRUE)
			{
				$this->load->library('upload_file');
				$test = $this->upload_file->do_img_upload();
				$this->load->model('course_model');
				$result = $this->course_model->save_course($test);
				if ($result==true) {
					echo "ok";
				} else {
					echo "no";
				}
			}else{
				echo "row";
			}

		}
		public function addExperiment($course_id) {
			$this->ci_smarty->assign('form', form_open('teacher_action/doAddExperiment',"enctype='multipart/form-data', class='form-horizontal'"));
			$this->ci_smarty->assign('course_id', $course_id);
			$this->display('course/addExperiment.php');
 		}
		public function doAddExperiment() {
			$this->form_validation->set_rules('exp_name','实验名称', 'required');
			if ($this->form_validation->run() == TRUE)
			{
				$this->load->library('upload_file');
				$test = $this->upload_file->do_doc_upload();
				$this->load->model('experiment_model');
				$result = $this->experiment_model->save_exp($test);
				if ($result==true) {
					echo "ok";
				} else {
					echo "no";
				}
			}else{
				echo "row";
			}

		}
		public function test(){
				echo time();
		}
	}

?>