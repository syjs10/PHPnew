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
	public function showTeacherLogin() {
		if ($this->session->userdata('teacher_name') != NULL) {
			$this->showTeacherPage(); 
			exit; 
		}
		$form = form_open('login/doTeacherLogin','class="form-horizontal",role="form"');
		$this->ci_smarty->assign('form', $form);
		$this->display('login/teacherLogin.php');
	}
	/**
	 * 执行教师登陆操作
	 * @return [type] [description]
	 *
	 * 之后可以修改为通用登陆验证
	 */
	function doTeacherLogin() {
		if ($this->session->userdata('teacher_name') != NULL) {
			$this->showTeacherPage(); 
			exit; 
			
		}
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
				$this->session->set_userdata('user', 'teacher');
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
	/**
	 * 教师登录后的页面
	 * @return [type] [description]
	 */
	public function showTeacherPage() {
				//登陆验证
		if ($this->session->userdata('teacher_name') != NULL) {
			$this->ci_smarty->assign('teacher_name', $this->session->userdata('teacher_name')) ;
			$this->display('teacher/teacherPage.html');
		} else {
			$this->showTeacherLogin();
		}

		
	}
	/**
	 * 教师选择页面
	 * @param  [type] $page [页面文件地址]
	 */
	public function teacherFramePage($page) {      
		$this->display('teacher/'.$page);
	}
	




	/**
	 * 学生登录页面
	 * @return [type] [description]
	 */
	public function showStudentLogin() {
		if ($this->session->userdata('student_name') != NULL) {
			$this->showStudentPage(); 
			exit; 
		}
		$form = form_open('login/doStudentLogin','class="form-horizontal",role="form"');
		$this->ci_smarty->assign('form', $form);
		$this->display('login/studentLogin.php');
	}


	/**
	 * 执行学生登陆操作
	 * @return [type] [description]
	 *
	 * 之后可以修改为通用登陆验证
	 */
	function doStudentLogin() {
		if ($this->session->userdata('student_name') != NULL) {
			$this->showStudentPage(); 
			exit; 
			// header('location:showStudentPage');
		}
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
				$arr = $this->login_model->login_match('student', $data);
				$this->session->set_userdata('username', $username);
				$this->session->set_userdata('user', 'student');
				$this->session->set_userdata('student_name', $arr['student_name']);
				$this->session->set_userdata('student_id', $arr['student_id']);
										//学生登陆后页面
										// echo $this->session->userdata('student_name')."页面";
				if ($arr) {
					$this->showStudentPage();  
				} else {
					echo "<script>alert('用户名密码错误');</script>";
					$this->showStudentLogin();
					
				}
				
			} else {
				echo "<script>alert('验证码错误');</script>";
				$form = form_open('login/doStudentLogin','class="form-horizontal",role="form"');
				$this->ci_smarty->assign('form', $form);
				$this->display('login/studentLogin.php');
			}
			
		} else {
			echo "<script>alert('表单不能为空');</script>";
			$form = form_open('login/doStudentLogin','class="form-horizontal",role="form"');
			$this->ci_smarty->assign('form', $form);
			$this->display('login/studentLogin.php');
		}
	}
	public function showStudentPage() {
				//登陆验证
		if ($this->session->userdata('student_name') != NULL) {
			$this->ci_smarty->assign('student_name', $this->session->userdata('student_name')) ;
			$this->display('student/studentPage.html');
		} else {
			$this->showStudentLogin();
		}
		
	}
	/**
	 * 学生选择页面
	 * @param  [type] $page [页面文件地址]
	 */
	public function studentFramePage($page) {      
		$this->display('student/'.$page);
	}


}

?>
