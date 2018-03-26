<?php
/**
 *
 */
class TeacherModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    /**
     * 添加教师
     * @param [type] $array [description]
     */
    public function addTeacher($array)
    {
        $sql               = "INSERT INTO teacher (teacher_name, username, password) VALUES (?, ?, ?);";
        $array['password'] = md5($array['password']);
        if ($this->db->query($sql, $array)) {
            return true;
        } else {
            return $this->db->error();
        }
    }
}
