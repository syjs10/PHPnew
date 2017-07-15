<?php  
	/**
	* 
	*/
	class Home extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->helper('url');
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
		public function index(){
			$this->ci_smarty->assign('base_url',base_url());
			$this->display('home.php');
		}
	}
?>