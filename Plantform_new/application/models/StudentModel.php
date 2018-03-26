<?php
/**
 *
 */
class StudentModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    /**
     * 获取学生信息
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function getStudentInfo($id = null)
    {
        if ($id == null) {
            $sql = "SELECT * FROM student";
        } else {
            $sql = "SELECT * FROM student WHERE student_id = ?";
        }
        $res = $this->db->query($sql, array($id));
        if ($res->num_rows() !== 0) {
            return $res->result_array();
        } else {
            return false;
        }
    }
    /**
     * 添加学生
     * @param [type] $array [description]
     */
    public function addStudent($array)
    {
        $sql               = "INSERT INTO student (student_name, username, password, student_class, student_num) VALUES (?, ?, ?, ?, ?);";
        $array['password'] = md5($array['password']);
        if ($this->db->query($sql, $array)) {
            return true;
        } else {
            return $this->db->error();
        }
    }
}
