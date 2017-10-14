<?php
      /**
       *
       */
      class Verify extends CI_Controller
      {

            function __construct()
            {
                  parent::__construct();
                  $this->load->library('session');
                  $this->load->library('Captcha');
            }
            public function index()
            {
                  $this->captcha->verifyImage(1,4,20,5);
                  // echo $_SESSION['verify'];
            }
      }

?>
