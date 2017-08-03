<?php 
	namespace app\model;
	use \core\lib\model;
	/**
	* 
	*/
	class cModel extends model {
		
		public function lists($table){
			$res = $this->select($table, '*');
			return $res;
		}
	}
