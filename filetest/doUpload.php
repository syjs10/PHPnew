<?php
	// print_r($_FILES);
	if (is_uploaded_file($_FILES['myfile']['tmp_name'])) {
		$upload_file  = $_FILES['myfile']['tmp_name'];
		$destDir      = $_SERVER['DOCUMENT_ROOT']."/src/";
		$move_to_file = $destDir.$_FILES['myfile']['name'];
		// echo $move_to_file;
		$file_size    = $_FILES['myfile']['size'];
		$file_type    = $_FILES['myfile']['type'];
		if($file_size < 2*1024*1024) {
			if ($file_type == "image/jpeg") {
				if (!is_dir($destDir)) {
					mkdir($destDir, 0777, true);
				}
				if (move_uploaded_file($upload_file, $move_to_file)) {
					echo "success";
				} else {
					echo "false";
				}
			} else {
				echo "<script>alert('文件过大，请上传2MB以内的文件')</script>";
			}
		} else {
			echo "<script>alert('文件过大，请上传2MB以内的文件')</script>";
		}
	}
?>
