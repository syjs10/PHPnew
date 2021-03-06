<?php 
	namespace core;
	/**
	* 
	*/
	class imooc{
		public static $classMap = array();
		public $assign;
		static public function run(){
			\core\lib\log::init();
			// \core\lib\log::log($_SERVER);
			$route = new \core\lib\route();
			// p($route);
			$ctrlClass = $route->ctrl;
			$action = $route->action;
			$ctrlClassL = MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
			$ctrl_file = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
			if (is_file($ctrl_file)) {
				include_once $ctrl_file;
				$ctrl = new $ctrlClassL();
				$ctrl->$action();
				\core\lib\log::log('ctrl:'.$ctrlClass.'  '.'action:'.$action);
			} else {
				throw new \Exception('找不到控制器'.$ctrlClass);
			}
		}
		static public function load($class) {
			//自动加载类库
			echo $class.'<br>';
			if (isset(self::$classMap[$class])) {
				return true;
			} else {
				$class = str_replace('\\', '/', $class);
				$file = IMOOC.'/'.$class.'.php';
				if (is_file($file)) {
					include $file;
					self::$classMap[$class] = $class;
				} else {
					return false;
				}
			}
			
			
			
		}
		public function assign($name, $value) {
			$this->assign[$name] = $value;
		} 
		public function display($file){
			// $file = APP.'/views/'.$file;
			// if (is_file($file)) {
			// 	extract($this->assign);
			// 	include $file;
			// }
			$file = APP.'/views/'.$file;
			if (is_file($file)) {
				$loader = new \Twig_Loader_Filesystem(APP.'/views');
				$twig = new \Twig_Environment($loader, array(
				    'cache' => IMOOC.'log',
				    'debug' => DEBUG
				));
				$template = $twig->load('index.html');
				$template->display($this->assign?$this->assign:'');
			}
		}
	}