<?php 
	namespace core\lib;
	use \core\lib\conf;
	/**
	* 
	*/
	// class model	extends \PDO{
		
	// 	public function __construct() {
	// 		$database = conf::all('database');
	// 		try {
	// 			parent::__construct($database['DSN'], $database['USERNAME'], $database['PASSWD']);
	// 		} catch (\PDOException $e) {
	// 			p($e->getMessage());
	// 		}
	// 	}
	// }
	class model	extends \Medoo\Medoo {
		
		public function __construct() {
			$option = conf::all('database');
			try {
				parent::__construct($option);
			} catch (\PDOException $e) {
				p($e->getMessage());
			}
		}
	}