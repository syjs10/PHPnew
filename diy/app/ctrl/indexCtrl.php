<?php 
	namespace app\ctrl;
	
	class indexCtrl extends \core\imooc {
		public function index() {
			// 路由测试
			// p('it is action');
			
			// model测试
			$model = new \core\lib\model();
			// $sql = "select * from user";
			// $ret = $model->query($sql);
			// p($ret->fetchAll());
			
			// view测试
			// $data  = "Hello World";
			// $title = "这是视图文件";
			// $this->assign('title', $title);
			// $this->assign('data', $data);
			// $this->display('index.html');
			
			// 配置类测试 
			// $temp = new \core\lib\conf;
			// print_r($temp->get('CTRL', 'route'));
			// print_r($temp);
		}
	}