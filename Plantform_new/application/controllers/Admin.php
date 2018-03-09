<?php

/**
 *  管理员类
 */
class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
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
        $form = form_open(base_url('admin/doLogin'), 'class="form-horizontal",role="form"');
        $this->assign('form', $form);
        $this->assign('user', "管理员");
        $this->display('login/login.html');
    }
    /**
     * 判断是否已登录或获取cookie登录
     * @return boolean [description]
     */
    private function _isLogin()
    {
        if (null != $this->session->userdata('adminName')
            || null != get_cookie("adminUsername")) {
            if (null == $this->session->userdata('adminName') && null != get_cookie('adminUsername')) {
                $this->session->set_userdata('adminUsername', get_cookie('adminUsername'));
                $this->session->set_userdata('adminName', get_cookie('adminName'));
                $this->session->set_userdata('adminId', get_cookie('adminId'));
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
        echo '<script>location.href="' . base_url("/admin/$page") . '"</script>';
        // header('location:'.base_url("admin/$page"));
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
                $arr = $this->loginModel->login_match('admin', $data);
                $this->session->set_userdata('user', 'admin');
                $this->session->set_userdata('adminUsername', $username);
                $this->session->set_userdata('adminName', $arr['admin_name']);
                $this->session->set_userdata('adminId', $arr['admin_id']);
                set_cookie("adminUsername", $username, 60 * 60 * 24);
                set_cookie("adminName", $arr['admin_name'], 60 * 60 * 24);
                set_cookie("adminId", $arr['admin_id'], 60 * 60 * 24);
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
        $this->assign('user', '管理员');
        $this->assign('adminName', $this->session->userdata('adminName'));
        $this->display("admin/{$page}.html");
    }
    /**
     * 显示管理员主页
     * @return [type] [description]
     */
    public function index()
    {
        $this->_display('optTeacher');
    }
    public function addTeacher()
    {
        $this->assign('form', form_open('teacher/doAddCourse', "enctype='multipart/form-data', class='form-horizontal'"));
        $this->_display('addTeacher');
    }
}