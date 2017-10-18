<?php
    /**
    *
    */
    class Course extends CI_Controller {

        function __construct() {
            parent::__construct();
            $this->load->model('courseModel');
            // $this->load->model('experiment_model');
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->library('form_validation');
        }
        public function index()
        {
            echo 'test';
        }
        public function showAllCourse() {
            $courseInfo = $this->courseModel->getCourse();
            foreach ($courseInfo as $key => $value) {
                $courseInfo[$key]['img_path']=base_url("../src/img/{$value['img_path']}");
                if (mb_strlen($value['course_introduction'])>=38) {
                    $courseInfo[$key]['course_introduction']=mb_substr($value['course_introduction'],0,38)."...";
                }
            }
            $this->assign('courseInfo', $courseInfo);
            $this->display('course/index.html');
        }
        public function showTeacherCourse() {
            $courseInfo = $this->courseModel->getTeacherCourse();
            foreach ($courseInfo as $key => $value) {
                $courseInfo[$key]['img_path']=base_url("../src/img/{$value['img_path']}");
                if (mb_strlen($value['course_introduction'])>=38) {
                    $courseInfo[$key]['course_introduction']=mb_substr($value['course_introduction'],0,38)."...";
                }
            }
            $this->assign('courseInfo', $courseInfo);
            $this->display('course/index.html');
        }
        // public function showAllTCourse() {
        //     $course_info = $this->course_model->get_t_course($_SESSION['teacher_id']);
        //     foreach ($course_info as $key => $value) {
        //         $course_info[$key]['img_path']=base_url("../src/img/{$value['img_path']}");
        //         if (mb_strlen($value['course_introduction'])>=38) {
        //             $course_info[$key]['course_introduction']=mb_substr($value['course_introduction'],0,38)."...";
        //         }
        //     }
        //     $this->ci_smarty->assign('base_url', site_url());
        //     $this->ci_smarty->assign('course_info', $course_info);
        //     $this->display('course/showAllCourse.php');
        // }
        // public function showCourse($course_id){
        //     $exp_info = $this->experiment_model->get_exp_c($course_id);
        //     foreach ($exp_info as $key => $value) {
        //         $exp_info[$key]['exp_doc_path']=base_url("../src/doc/{$value['exp_doc_path']}");
        //     }
        //     $this->ci_smarty->assign('base_url', site_url());
        //     $this->ci_smarty->assign('exp_info', $exp_info);
        //     $this->ci_smarty->assign('course_id', $course_id);
        //     $this->display('course/showCourse.php');
        // }
        // public function showExperiment($exp_id){
        //     $exp_info = $this->experiment_model->get_exp_e($exp_id);
        //     $exp_info['exp_doc_path']=base_url("../src/doc/{$exp_info['exp_doc_path']}");
        //     $this->ci_smarty->assign('exp_info', $exp_info);
        //     $this->ci_smarty->assign('base_url', site_url());
        //     $this->display('course/showExperiment.php');
        // }
    }
?>