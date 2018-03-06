<?php
/**
 *   完成实验的增删改查
 */
class ExperimentModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    /**
     * 通过课程ID获取实验信息
     * @return [arrs] [查询结果]
     */
    public function getExpByCouresId($course_id)
    {
        $sql = "SELECT *
                    FROM experiment
                    WHERE course_id=" . $course_id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    /**
     * 通过实验ID获取实验信息
     * @param  [type] $exp_id [description]
     * @return [arr]         [description]
     */
    public function getExpByExpId($exp_id)
    {
        $sql = "SELECT *
                    FROM experiment
                    WHERE exp_id=" . $exp_id;
        $query = $this->db->query($sql);
        return ($query->result_array())[0];
    }
    // public function get_t_course($id) {
    //  $sql="SELECT *
    //          FROM course cs
    //          JOIN teacher tr
    //          ON cs.teacher_id = tr.teacher_id where cs.teacher_id=".$id.";";
    //  $query = $this->db->query($sql);
    //  return $query->result_array();
    // }
    /**
     * 保存实验信息
     * @param  [type] $image [description]
     * @return [type]        [description]
     */
    public function saveExp($text = null)
    {
        $sql  = "SELECT exp_num FROM course WHERE course_id = ?";
        $num  = $this->db->query($sql, array($this->input->post('course_id')))->row()->exp_num;
        $data = array(
            'exp_name'     => $this->input->post('exp_name'),
            'exp_doc_path' => $text,
            'course_id'    => $this->input->post('course_id'),
            'exp_num'      => (int) $num + 1,
        );
        // $this->db->trans_start();
        $this->db->insert('experiment', $data);
        //课程记录实验数
        $sql = "UPDATE course SET exp_num = exp_num+1 WHERE course_id = ?";
        $res = $this->db->query($sql, array($this->input->post('course_id')));
        // $this->db->trans_complete();
        return $res;

    }
}
