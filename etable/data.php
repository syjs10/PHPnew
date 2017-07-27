<?php 
	$action = $_GET['action'];
	switch ($action) {
		case 'init_data_list':
			init_data_list();
			break;
		case 'add_row':
			add_row();
			break;
		case 'del_row':
			del_row();
			break;
		case 'edit_row':
			edit_row();
			break;
	}
	function query_sql(){
		$mysqli = new mysqli('127.0.0.1', 'shaddow', '123456', "etable");
		$mysqli->query("set character set 'utf8'");//读库 
		$mysqli->query("set names 'utf8'");//写库 
		$sqls   = func_get_args();
		foreach ($sqls as $s) {
			$query = $mysqli->query($s);
		}
		$mysqli->close();
		return $query;
	}
	function init_data_list(){
		$sql   = "SELECT * FROM `et_data`";
		$query = query_sql($sql);
		while ($row = $query->fetch_assoc()) {
			$data[] = $row;
		}
		echo json_encode($data, true);
		// var_dump($data);
	}

