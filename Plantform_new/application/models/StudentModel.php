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
}
