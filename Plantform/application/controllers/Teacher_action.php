<?php  
	/**
	* 
	*/
	class Teacher_action extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
		}
		public function display($page) {
	              	$this->ci_smarty->assign('base_url', base_url());
	              	$this->ci_smarty->display('template/header.tpl');
	              	$this->ci_smarty->display($page);
	           	}
		function addcourse() {
			$this->ci_smarty->assign('form', form_open('doadd',"enctype='multipart/form-data', class='form'"));
		             $this->display('teacher/addcourse.php');
		}
		function doadd() {

		}
	}

?>