<?php
    /**
    *   完成课程的增删改查
    */
    class CourseModel extends CI_Model {

        function __construct() {
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }
        /**
         * 获取课程信息
         * @return [arr] [查询结果]
         */
        public function getCourse() {
            $sql="SELECT course_id, course_name, course_introduction, img_path, teacher_name
                    FROM course cs
                    JOIN teacher tr
                    ON cs.teacher_id = tr.teacher_id;";
            $query = $this->db->query($sql);
            return $query->result_array();
        }
        public function getTeacherCourse($id) {
            $sql="SELECT *
                    FROM course cs
                    JOIN teacher tr
                    ON cs.teacher_id = tr.teacher_id
                    WHERE cs.teacher_id=".$id.";";
            $query = $this->db->query($sql);
            return $query->result_array();
        }
        /**
         * 保存课程信息
         * @param  [type] $image [description]
         * @return [type]        [description]
         */
        public function saveCourse($image = NULL) {
            $data = array(
                        'course_name' => $this->input->post('course_name'),
                        'course_introduction' =>$this->input->post('course_introduction'),
                        'img_path' => $image,
                        'teacher_id' =>$this->session->userdata('teacher_id')

                    );
            return $this->db->insert('course', $data);

        }
    }
?>
