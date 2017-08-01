<?php 
namespace core\lib;
/**
* 
*/
class route {
	
	public function __construct()
	{
		/**
		 * 1.隐藏index.php
		 * 2.获取URL变量
		 * 3.返回对应的方法
		 */
		// p($_SERVER);
		if(isset($_SERVER['PATH_INFO']) && '/' != $_SERVER['PATH_INFO']){
			$path = $_SERVER['PATH_INFO'];
			$patharr = explode('/', trim($path, '/'));
			// p($patharr);
			if (isset($patharr[0])) {
				$this->ctrl = $patharr[0];
			}
			unset($patharr[0]);
			if (isset($patharr[1])) {
				$this->action = $patharr[1];
				unset($patharr[1]);
			} else {
				$this->action = 'index';
			}
			//url多余部分变成属性
			$count = count($patharr) + 2;
			$i = 2;
			while($i < $count) {
				if (isset($patharr[$i + 1])) {
					$_GET[$patharr[$i]] = $patharr[$i + 1];
				}				
				$i = $i + 2;
			}
			p($_GET);
		} else {
			$this->ctrl = 'index';
			$this->action = 'index';
		}
	}
}
	