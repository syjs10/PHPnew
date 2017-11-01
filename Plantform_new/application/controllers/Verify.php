<?php
      /**
       * 验证码显示类
       */
      class Verify extends CI_Controller
      {
            /**
             * 构造方法
             */
            function __construct()
            {
                  parent::__construct();
                  $this->load->library('session');
                  $this->load->library('Captcha');
            }
            /**
             * 显示验证码gif
             * @return [type] [description]
             */
            public function index()
            {
                  $this->captcha->verifyImage(1,4,20,5);
                  // echo $_SESSION['verify'];
            }
      }

?>
