<?php

/**
 * 教师类
 */
class Teacher extends CI_Controller
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
        $this->load->model('experimentModel');
        $this->load->model('studentModel');
        $this->load->model('loginModel');
    }
    /**
     * 登录
     * @return [type] [description]
     */
    public function login()
    {
        if ($this->_isLogin()) {
            $this->_jumpTo('index');
            exit();
        }
        $form = form_open(base_url('teacher/doLogin'), 'class="form-horizontal",role="form"');
        $this->assign('form', $form);
        $this->assign('user', "教师");
        $this->display('login/login.html');
    }
    /**
     * 判断是否已登录或获取cookie登录
     * @return boolean [description]
     */
    private function _isLogin()
    {
        if (null != $this->session->userdata('teacherName')
            || null != get_cookie("teacherUsername")) {
            if (null == $this->session->userdata('teacherName') && null != get_cookie('teacherUsername')) {
                $this->session->set_userdata('teacherUsername', get_cookie('teacherUsername'));
                $this->session->set_userdata('teacherName', get_cookie('teacherName'));
                $this->session->set_userdata('teacherId', get_cookie('teacherId'));
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
        echo '<script>location.href="' . base_url("/teacher/$page") . '"</script>';
        // header('location:'.base_url("teacher/$page"));
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
                $arr = $this->loginModel->login_match('teacher', $data);
                $this->session->set_userdata('user', 'teacher');
                $this->session->set_userdata('TeacherUsername', $username);
                $this->session->set_userdata('teacherName', $arr['teacher_name']);
                $this->session->set_userdata('teacherId', $arr['teacher_id']);
                set_cookie("teacherUsername", $username, 60 * 60 * 24);
                set_cookie("teacherName", $arr['teacher_name'], 60 * 60 * 24);
                set_cookie("teacherId", $arr['teacher_id'], 60 * 60 * 24);
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
                $this->login();
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
        $this->assign('user', '教师');
        $this->assign('teacherName', $this->session->userdata('teacherName'));
        $this->display("teacher/{$page}.html");
    }
    /**
     * 显示教师主页
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
     *  显示添加课程页面
     */
    public function addCourse()
    {
        $this->assign('form', form_open('teacher/doAddCourse', "enctype='multipart/form-data', class='form-horizontal'"));
        $this->assign('user', '教师');
        $this->assign('teacherName', $this->session->userdata('teacherName'));
        $this->display('teacher/addCourse.html');
    }
    /**
     * 添加课程
     * @return [type] [description]
     */
    public function doAddCourse()
    {
        // print_r($_FILES);
        $this->form_validation->set_rules('course_name', '课程名称', 'required');
        $this->form_validation->set_rules('course_introduction', '课程介绍', 'required');
        if ($this->form_validation->run() == true) {
            $this->load->library('uploadfile');
            $test = $this->uploadfile->do_img_upload();
            $this->load->model('courseModel');
            $result = $this->courseModel->saveCourse($test);
            if ($result == true) {
                echo "ok";
            } else {
                echo "no";
            }
        } else {
            echo "row";
        }
    }
    /**
     * 添加实验页面
     * @param [type] $course_id [description]
     */
    public function addExperiment($course_id)
    {
        $this->assign('form', form_open('teacher/doAddExperiment', "enctype='multipart/form-data', class='form-horizontal'"));
        $this->assign('course_id', $course_id);
        $this->display('course/addExperiment.html');
    }
    /**
     * 执行添加实验
     * @return [type] [description]
     */
    public function doAddExperiment()
    {
        $this->form_validation->set_rules('exp_name', '实验名称', 'required');
        if ($this->form_validation->run() == true) {
            $this->load->library('uploadfile');
            $test   = $this->uploadfile->do_doc_upload();
            $result = $this->experimentModel->saveExp($test);
            if ($result == true) {
                echo "ok";
            } else {
                echo "no";
            }
        } else {
            echo "row";
        }

    }
    // public function showAllStudent()
    // {
    //     var_dump($this->studentModel->getStudentInfo());
    // }
}
