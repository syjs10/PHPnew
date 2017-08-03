<?php 
	//日志文件系统
	namespace core\lib\drive\log;
	
	use core\lib\conf;
	/**
	* 
	*/
	class  file{
		public $path;
		public function __construct() {
			$conf = conf::get('OPTION','log');
			$this->path = $conf['PATH'];
		}
		public function log($message, $file = 'log') {
			if(!is_dir($this->path)){
				mkdir($this->path, 0777, true);
			}
			if(!is_dir($this->path.'/'.date('YmdH'))){
				mkdir($this->path.'/'.date('YmdH'), 0777, true);
				chmod($this->path.'/'.date('YmdH'), 0777);

			}
			// p($this->path.'/'.date('YmdH').$file.'.php');
			return file_put_contents($this->path.'/'.date('YmdH').'/'.$file.'.php', date('Y-m-d H:i:s').' '.json_encode($message).PHP_EOL, FILE_APPEND);
		}
		
	}