{extends file='./hflayout.tpl'}
{block name=head}
    <script>
        function setIframeHeight(iframe) {
            if (iframe) {
                var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
                if (iframeWin.document.body) {
                    iframe.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
                }
            }
        };

        window.onload = function () {
            setIframeHeight(document.getElementById('window'));
        };

        function changePage(page) {
            var window = document.getElementById('window');
            window.src=page;

        }
    </script>
{/block}
{block name=body}
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">操作</div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="javascript:void(0);" class="list-group-item" onclick="changePage('{$base_url}course/showTeacherCourse')">我的课程</a>
                            <a href="javascript:void(0);" class="list-group-item" onclick="changePage('{$base_url}teacher/addCourse')">添加课程</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-xs-12">{block name=container}{/block}</div>
        </div>
    </div>
{/block}