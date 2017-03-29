<?php
/**
*
*/
class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('login_model');
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
	 * 教师登录页面
	 * @return [type] [description]
	 */
	public function showTeacherLogin()
	{
		$form = form_open('login/doTeacherLogin','class="form-horizontal",role="form"');
		$this->ci_smarty->assign('form', $form);
		$this->display('login/teacherLogin.php');
	}
	/**
	 * 执行登陆操作
	 * @return [type] [description]
	 *
	 * 之后可以修改为通用登陆验证
	 */
	function doTeacherLogin() {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('verify', 'Verify', 'required');
		if ($this->form_validation->run()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$verify = $this->input->post('verify');
			if ($_SESSION['verify'] == $verify) {
				$data = array(
					'username' => $username, 
					'password' => md5($password)
					);
				$arr = $this->login_model->login_match('teacher', $data);
				$this->session->set_userdata('username', $username);
				$this->session->set_userdata('teacher_name', $arr['teacher_name']);
				$this->session->set_userdata('teacher_id', $arr['teacher_id']);
										//教师登陆后页面
										// echo $this->session->userdata('username')."页面";
				if ($arr) {
					$this->showTeacherPage();  
				} else {
					echo "<script>alert('用户名密码错误');</script>";
					$this->showTeacherLogin();
				}
				
			} else {
				echo "<script>alert('验证码错误');</script>";
				$form = form_open('login/doTeacherLogin','class="form-horizontal",role="form"');
				$this->ci_smarty->assign('form', $form);
				$this->display('login/teacherLogin.php');
			}
			
		} else {
			echo "<script>alert('表单不能为空');</script>";
			$form = form_open('login/doTeacherLogin','class="form-horizontal",role="form"');
			$this->ci_smarty->assign('form', $form);
			$this->display('login/teacherLogin.php');
		}
	}
	public function showTeacherPage() {
				//登陆验证
		$this->ci_smarty->assign('teacher_name', $this->session->userdata('teacher_name')) ;
		$this->display('login/teacherPage.html');
	}
	public function framePage($page) {
		$this->display('teacher/'.$page);
	}
	
}

?>
