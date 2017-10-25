<!DOCTYPE html>
<html lang="en">
<head>
    <title>完整demo</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <script type="text/javascript" charset="utf-8" src="ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src="ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src="ueditor/third-party/jquery-1.10.2.min.js"></script>
</head>
<body>
    <input type="text" id="title">
    <script id="editor" type="text/plain" style="width:1024px;height:500px;"></script>
    <button id="submit">提交</button>
</body>
    <script>
        var ue = UE.getEditor('editor');
        $("#submit").click(function(){
            var content = ue.getContent();
            $.ajax({
                url: "http://localhost/mongoTest/test.php",
                type: "POST",
                dataType: 'json',
                data: {
                    'title':$("#title").val(),
                    'content':content
                }
            });
        });


    </script>
</html>