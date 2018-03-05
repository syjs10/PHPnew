<?php
/**
 *   完成课程的增删改查
 */
class CourseModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
    /**
     * 获取课程信息
     * @return [arr] [查询结果]
     */
    public function getCourse()
    {
        $sql = "SELECT course_id, course_name, course_introduction, img_path, teacher_name
                    FROM course cs
                    JOIN teacher tr
                    ON cs.teacher_id = tr.teacher_id;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    /**
     * 获取教师创建课程
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getTeacherCourse($id)
    {
        $sql = "SELECT *
                    FROM course cs
                    JOIN teacher tr
                    ON cs.teacher_id = tr.teacher_id
                    WHERE cs.teacher_id=" . $id . ";";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function getOneCourse($courseId)
    {
        $sql = "SELECT course_id, course_name, course_introduction, img_path, teacher_name
                    FROM course cs
                    JOIN teacher tr
                    ON cs.teacher_id = tr.teacher_id
                    WHERE course_id = {$courseId}";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    /**
     * 保存课程信息
     * @param  [type] $image [description]
     * @return [type]        [description]
     */
    public function saveCourse($image = null)
    {
        $data = array(
            'course_name'         => $this->input->post('course_name'),
            'course_introduction' => $this->input->post('course_introduction'),
            'img_path'            => $image,
            'teacher_id'          => $this->session->userdata('teacherId'),
            'exp_num'             => 0,
        );
        return $this->db->insert('course', $data);

    }
    /**
     * 选课
     * @param  [type] $student_id [description]
     * @param  [type] $course_id  [description]
     * @return [type]             [description]
     */
    public function chooseCourse($student_id, $course_id)
    {
        $sql = "SELECT * FROM choose_course WHERE student_id = ? AND course_id = ?";
        $num = $this->db->query($sql, array($student_id, $course_id))->num_rows();
        if ($num < 1) {
            $sql = "INSERT INTO choose_course (student_id, course_id) values (?, ?)";
            if ($this->db->query($sql, array($student_id, $course_id))) {
                return '选课成功';
            }
        } elseif ($num >= 1) {
            return '已经选过此课程';
        } else {
            return '选课失败';
        }

    }
    /**
     * 显示已选课程
     * @param  [type] $student_id [description]
     * @return [type]             [description]
     */
    public function getChooseCourse($student_id)
    {
        $sql = "SELECT course_id, course_name, course_introduction, img_path, teacher_name
                FROM course cs
                JOIN teacher tr
                ON cs.teacher_id = tr.teacher_id
                WHERE cs.course_id in (
                    SELECT course_id
                    FROM choose_course
                    WHERE student_id = ?
                );";
        return $this->db->query($sql, $student_id)->result_array();
    }

}
