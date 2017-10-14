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
            $form = form_open(base_url('teacher/doLogin'),'class="form-horizontal",role="form"');
            $this->assign('form', $form);
            $this->assign('user', "教师");
            $this->display('login/login.html');
        }
    }