<?php

class Uploadfile
{


    /**
     * 实现图片上传
     * @param  string $filename [input.name]
     * @return [string/bool]    [保存图片的文件名]
     */
    function do_img_upload($filename ="myfile")
    {
        if (is_uploaded_file($_FILES[$filename]['tmp_name'])) {
            $upload_file  = $_FILES[$filename]['tmp_name'];
            $destDir      = $_SERVER['DOCUMENT_ROOT']."/src/img/";
            $save_name    = time().rand(10000000,99999999).".jpeg";
            $move_to_file = $destDir.$save_name;
            $file_size    = $_FILES[$filename]['size'];
            $file_type    = $_FILES[$filename]['type'];
            if($file_size < 2*1024*1024) {
                if ($file_type == "image/jpeg") {
                    if (!is_dir($destDir)) {
                        mkdir($destDir, 0777, true);
                    }
                    if (move_uploaded_file($upload_file, $move_to_file)) {
                        return $save_name;
                    } else {
                        return false;
                    }
                } else {
                    echo "<script>alert('请上传Jpeg的图片')</script>";
                    exit();
                }
            } else {
                echo "<script>alert('文件过大，请上传2MB以内的文件')</script>";
                exit();
            }
        }
    }
    /**
     * 实现文档上传
     * @param  string $filename [input.name]
     * @return [string/bool]    [保存文档的文件名]
     */
    function do_doc_upload($filename ="myfile")
    {
        if (is_uploaded_file($_FILES[$filename]['tmp_name'])) {
            $upload_file  = $_FILES[$filename]['tmp_name'];
            $destDir      = $_SERVER['DOCUMENT_ROOT']."/src/doc/";
            $save_name    = time().rand(10000000,99999999).".txt";
            $move_to_file = $destDir.$save_name;
            $file_size    = $_FILES[$filename]['size'];
            $file_type    = $_FILES[$filename]['type'];
            if($file_size < 2*1024*1024) {
                if ($file_type == "text/plain") {
                    if (!is_dir($destDir)) {
                        mkdir($destDir, 0777, true);
                    }
                    if (move_uploaded_file($upload_file, $move_to_file)) {
                        return $save_name;
                    } else {
                        return false;
                    }
                } else {
                    echo "<script>alert('请上传TXT的图片')</script>";
                    exit();
                }
            } else {
                echo "<script>alert('文件过大，请上传2MB以内的文件')</script>";
                exit();
            }
        }
    }

}
?>