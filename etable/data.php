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
	function del_row(){
		$dataid = $_POST['dataid'];
		$sql   = "DELETE FROM `et_data` WHERE `id` = " . $dataid;
		$query = query_sql($sql);
		if ($query) {
			echo "ok";
		} else {
			echo "false";
		}
	}
	function add_row(){
		$sql = 'INSERT INTO `et_data` (`c_a`, `c_b`, `c_c`, `c_d`, `c_e`, `c_f`, `c_g`, `c_h`) VALUES (';
		for ($i=0; $i < 8; $i++) { 
			$sql .= '\''.$_POST["col_" . $i ].'\', ';
		}
		$sql  = trim($sql, ", ");
		$sql .= ");";
		$res = query_sql($sql, "SELECT LAST_INSERT_ID() AS LD");
		if ($res) {
			$d = $res->fetch_assoc();
			echo $d['LD'];
 		} else {
			echo "false";
		}
	} 
	function edit_row(){
		$sql = "UPDATE `et_data` SET `c_a`='{$_POST['col_0']}', `c_b`='{$_POST['col_1']}', `c_c`='{$_POST['col_2']}', `c_d`='{$_POST['col_3']}', `c_e`='{$_POST['col_4']}', `c_f`='{$_POST['col_5']}', `c_g`='{$_POST['col_6']}', `c_h`='{$_POST['col_7']}' WHERE `id` = '{$_POST['dataid']}'";
		$res = query_sql($sql);
		if ($res) {
			
			echo "ok";
 		} else {
			echo "false";
		}
	}

