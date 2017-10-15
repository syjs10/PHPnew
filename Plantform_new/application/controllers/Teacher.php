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
            $this->load->model('login');
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
            $form = form_open(base_url('teacher/doLogin'),'class="form-horizontal",role="form"');
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
             || null != get_cookie("teacherLogin")) {
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
            echo '<script>location.href="'.base_url("/teacher/$page").'"</script>';
            // header('location:'.base_url("teacher/$page"));
        }
        /**
         * 执行登陆操作
         * @return [type] [description]
         */
        function doLogin() {
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
                $verify = $this->input->post('verify');
                if ($_SESSION['verify'] == $verify) {
                    $data = array(
                        'username' => $username,
                        'password' => md5($password)
                        );
                    $arr = $this->login->login_match('teacher', $data);
                    $this->session->set_userdata('user', 'teacher');
                    $this->session->set_userdata('username', $username);
                    $this->session->set_userdata('teacherName', $arr['teacher_name']);
                    $this->session->set_userdata('teacherId', $arr['teacher_id']);
                    set_cookie("teacherLogin", $username, 60 * 60 * 24);
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
        public function index()
        {
            if ($this->_isLogin()) {
                $this->assign('teacherName', $this->session->userdata('teacherName')) ;
                $this->display('teacher/index.html');
            }
        }
    }