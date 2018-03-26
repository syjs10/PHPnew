{extends file='../layout.tpl'}

{block name=head}
    <style>
        a{
            text-align: center;
        }
    </style>
{/block}
{block name=header}
    <nav class="navbar navbar-default" role="navigation" style="border-radius: 0 !important;border:0px !important;">
        <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{$base_url}student/index">{$user}页面</a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{$base_url}student/showChooseCourse">我的课程</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{$studentName} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="">修改密码</a></li>
                        <li><a href="">退出登录</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        </div>
    </nav>
{/block}

{block name=footer}
    <footer style="margin:0px auto;text-align: center;">&copy; By JS</footer>

{/block}