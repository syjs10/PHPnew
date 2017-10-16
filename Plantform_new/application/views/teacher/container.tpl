{extends file='./hflayout.tpl'}

{block name=body}
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">操作</div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="" class="list-group-item">我的课程</a>
                            <a href="" class="list-group-item">添加课程</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-xs-12">{block name=container}{/block}</div>
        </div>
    </div>
{/block}