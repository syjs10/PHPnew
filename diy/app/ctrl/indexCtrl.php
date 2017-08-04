<?php 
	namespace app\ctrl;

	use \core\lib\model;
	class indexCtrl extends \core\imooc {
		public function index() {
			// 路由测试
			// p('it is action');
			
			// model测试
			// $model = new model();
			// // dump($model);
			// // $data = $model->select('user', '*');
			// // $sql = "select * from user";
			// // $ret = $model->query($sql);
			// $insertData = array(
				 
			// 	'id' => '6',
			// 	'name' => 'IMOOC'
			// );
			// $res = $model->insert('user', $insertData);
			// // $data = $model->select('user', '*');

			// // dump($data);
			// dump($res);
			// $model = new \app\model\cModel();
			// $res = $model->lists();
			// dump($res);
			// $data = array(
			// 	'name' => 'Michaels'
			// );
			// $temp = $model->setOne(1, $data);
			// $res = $model->getOne(1);
			// dump($res);
			// $temp = $model->delOne(4);
			// dump($temp);
			// $res = $model->lists();
			// dump($res);
			// view测试
			// $data  = "Hello World";
			$data = $_SERVER['PATH_INFO'];
			$title = "这是视图文件";
			$this->assign('title', $title);
			$this->assign('data', $data);
			$this->display('index.html');
			
			// 配置类测试 
			// $temp = new \core\lib\conf;
			// print_r($temp->get('CTRL', 'route'));
			// print_r($temp);
		}
		public function test(){
			$data  = "test";
			$title = "这是视图文件";
			$this->assign('title', $title);
			$this->assign('data', $data);
			$this->display('test.html');
		}
	}