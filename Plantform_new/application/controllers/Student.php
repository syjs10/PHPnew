<?php

/**
 * 教师类
 */
class Student extends CI_Controller
{
    /**
     * 构造方法
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('loginModel');
        $this->load->model('courseModel');
    }
    /**
     * 登录
     * @return [type] [description]
     */
    public function login()
    {
        $form = form_open(base_url('Student/doLogin'), 'class="form-horizontal",role="form"');
        $this->assign('form', $form);
        $this->assign('user', "学生");
        $this->display('login/login.html');
    }
    /**
     * 判断是否已登录或获取cookie登录
     * @return boolean [description]
     */
    private function _isLogin()
    {
        if (null != $this->session->userdata('studentName')
            || null != get_cookie("studentLogin")) {
            if (null == $this->session->userdata('studentName') && null != get_cookie('studentUsername')) {
                $this->session->set_userdata('studentUsername', get_cookie('studentUsername'));
                $this->session->set_userdata('studentName', get_cookie('studentName'));
                $this->session->set_userdata('studentId', get_cookie('studentId'));
                return true;
            }
            return true;
        } else {
            return false;
        }
    }
    /**
     * 执行跳转操作(本类页面之间跳转)
     * @param  [String] $page 本类的方法名
     * @return [type]       [description]
     */
    private function _jumpTo($page)
    {
        echo '<script>location.href="' . base_url("/student/$page") . '"</script>';
        // header('location:'.base_url("student/$page"));
    }
    /**
     * 执行登陆操作
     * @return [type] [description]
     */
    public function doLogin()
    {
        if ($this->_isLogin()) {
            $this->_jumpTo('index');
            exit();
        }
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('verify', 'Verify', 'required');
        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $verify   = $this->input->post('verify');
            if ($_SESSION['verify'] == $verify) {
                $data = array(
                    'username' => $username,
                    'password' => md5($password),
                );
                $arr = $this->loginModel->login_match('student', $data);
                $this->session->set_userdata('user', 'student');
                $this->session->set_userdata('studentUsername', $username);
                $this->session->set_userdata('studentName', $arr['student_name']);
                $this->session->set_userdata('studentId', $arr['student_id']);
                set_cookie("studentUsername", $username, 60 * 60 * 24);
                set_cookie("studentName", $arr['student_name'], 60 * 60 * 24);
                set_cookie("studentId", $arr['student_id'], 60 * 60 * 24);
                if (!empty($arr)) {
                    $this->_jumpTo('index');
                    exit();
                } else {
                    echo "<script>alert('用户名密码错误');</script>";
                    $this->_jumpTo('login');
                    exit();
                }

            } else {
                echo "<script>alert('验证码错误');</script>";
                $this->_jumpTo('login');
                exit();
            }
        } else {
            echo "<script>alert('表单不能为空');</script>";
            $this->_jumpTo('login');
            exit();
        }
    }

    /**
     * 显示页面专用方法
     * @return [type] [description]
     */
    private function _display($page)
    {
        if (!$this->_isLogin()) {
            echo "<script>alert('请先登录');</script>";
            $this->_jumpTo('login');
            exit();
        }
        $this->assign('user', '学生');
        $this->assign('studentName', $this->session->userdata('studentName'));
        $this->display("student/{$page}.html");
    }
    /**
     * 显示课程
     * @param  [arr] $courseInfo 输入课程内容
     * @return [type] [description]
     */
    public function showCourseByInput($courseInfo)
    {
        foreach ($courseInfo as $key => $value) {
            $courseInfo[$key]['img_path'] = base_url("../src/img/{$value['img_path']}");
            if (mb_strlen($value['course_introduction']) >= 38) {
                $courseInfo[$key]['course_introduction'] = mb_substr($value['course_introduction'], 0, 38) . "...";
            }
        }
        $this->assign('courseInfo', $courseInfo);
        $this->display('course/index.html');
    }
    /**
     * 选课模块
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function chooseCourse($id)
    {
        var_dump($this->courseModel->chooseCourse($this->session->userdata('studentId'), $id));
    }
    /**
     * 显示主页
     * @return [type] [description]
     */
    public function index()
    {
        $this->_display('index');
    }
    /**
     * 显示课程
     * @return [type] [description]
     */
    public function showCourse()
    {
        $this->_display('showCourse');
    }
    /**
     * 显示学生已选课程
     * @param  string $value [description]
     * @return [type]        [description]
     */
    public function showChooseCourse($id)
    {
        if (!$this->_isLogin()) {
            echo "<script>alert('请先登录');</script>";
            $this->_jumpTo('login');
            exit();
        }
        $this->showCourseByInput($this->courseModel->getChooseCourse(1));
    }

}
