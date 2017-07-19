<?php  
	/**
	*  
	*/
	class Login_model extends CI_Model {
		
		function __construct() {
			parent::__construct();
			$this->load->database();
		}
		/**
		 * 登录匹配查询
		 * @param  [type] $database 数据库名
		 * @param  [type] $arr      [description]
		 * @return [type]           返回查询数据
		 */
		function login_match ($database, $arr) {
			return $this->db->get_where($database, $arr)->row_array();
		}
	}
?>