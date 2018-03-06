<?php
/**
 *   课程类
 *   负责显示课程列表和信息
 */
class Course extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('courseModel');
        $this->load->model('experimentModel');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        echo 'test';
    }
    /**
     * 显示所有课程(主要用于嵌入其他模块)
     * @return [type] [description]
     */
    public function showAllCourse()
    {
        $courseInfo = $this->courseModel->getCourse();
        foreach ($courseInfo as $key => $value) {
            $courseInfo[$key]['img_path'] = base_url("../src/img/{$value['img_path']}");
            if (mb_strlen($value['course_introduction']) >= 38) {
                $courseInfo[$key]['course_introduction'] = mb_substr($value['course_introduction'], 0, 38) . "...";
            }
        }
        $this->assign('courseInfo', $courseInfo);
        $this->display('course/index.html');
    }

    /**
     * 显示教师的自己创建的课程
     * @return [type] [description]
     */
    public function showTeacherCourse()
    {
        $courseInfo = $this->courseModel->getTeacherCourse($this->session->userdata('teacherId'));
        foreach ($courseInfo as $key => $value) {
            $courseInfo[$key]['img_path'] = base_url("../src/img/{$value['img_path']}");
            if (mb_strlen($value['course_introduction']) >= 38) {
                $courseInfo[$key]['course_introduction'] = mb_substr($value['course_introduction'], 0, 38) . "...";
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
    /**
     * 显示课程的主要信息与实验列表
     * @param  [type] $course_id [课程编号]
     * @return [type]            [description]
     */
    public function courseInfo($courseId)
    {
        $complete_exp_num       = $this->courseModel->getProgress($this->session->userdata('studentId'), $courseId);
        $courseInfo             = $this->courseModel->getOneCourse($courseId);
        $courseInfo['img_path'] = base_url("../src/img/{$courseInfo['img_path']}");
        $expInfo                = $this->experimentModel->getExpByCouresId($courseId);
        foreach ($expInfo as $key => $value) {
            $expInfo[$key]['exp_doc_path'] = base_url("../src/doc/{$value['exp_doc_path']}");
            $expInfo[$key]['exp_num']      = (int) ($expInfo[$key]['exp_num']);
        }
        $courseInfo = array_merge($courseInfo, array('complete_exp_num' => (int) $complete_exp_num));
        $this->assign('expInfo', $expInfo);
        $this->assign('courseInfo', $courseInfo);
        $this->display('course/course.html');
    }

}
