<?php
      /**
       *
       */
      class Verify extends CI_Controller {

            function __construct() {
                  parent::__construct();
                  $this->load->library('lib_captcha');
                  $this->load->library('session');
            }
            public function verify_image() {

                  $this->lib_captcha->verifyImage(1,4,20,5);
                  echo $_SESSION['verify'];
            }
      }

?>
