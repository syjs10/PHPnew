<?php
    /**
     *
     */
    class MyCtrl extends CI_Controller {
        public function __construct() {
            date_default_timezone_set("PRC");
            parent::__construct();
        }
        public function assign($key,$val) {
            $this->tmp->assign($key,$val);
        }

        public function display($html) {
            $this->tmp->display($html);
        }
    }
?>