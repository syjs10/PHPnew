<?php
    /**
    * 实验类
    */
    class Experiment extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->load->model('experimentModel');
            $this->load->library('session');
            $this->load->helper('url');
        }
        /**
         * 显示实验
         * @param  [type] $exp_id [description]
         * @return [type]         [description]
         */
        public function showExperiment($exp_id){
            $expInfo = $this->experimentModel->getExpByExpId($exp_id);
            // var_dump($expInfo);
            $expInfo['exp_doc_path']=base_url("../src/doc/{$expInfo['exp_doc_path']}");
            $this->assign('expInfo', $expInfo);
            $this->assign('base_url', site_url());
            $this->display('course/showExperiment.html');
        }
    }