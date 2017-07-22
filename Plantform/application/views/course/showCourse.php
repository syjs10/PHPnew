<{block name=head}>

<{/block}>

<{block name=body}>
<nav class="navbar navbar-default">
	<ul class="nav navbar-nav navbar-right">
		<li><a href="#">test</a></li>
		<li class="dropdown">
        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
            	<li><a href="#">Action</a></li>
            	<li><a href="#">Another action</a></li>
            	<li><a href="#">Something else here</a></li>
            	<li role="separator" class="divider"></li>
            	<li><a href="#">Separated link</a></li>
            </ul>
        </li>
	</ul>
</nav>
	<{if $smarty.session.username != null}>
		ok
	<{/if}>
	<button type="" class="btn btn-success" onclick="location.href='<{$base_url}>index.php/teacher_action/addExperiment/<{$course_id}>'">添加实验</button>
	<{foreach from=$exp_info item=value}>
		<p><{$value['exp_name']}> <a href="<{$base_url}>index.php/course/showExperiment/<{$value['exp_id']}>">开始实验</a> <a href="<{$value['exp_doc_path']}>" >doc</a></p>
	<{/foreach}>
<{/block}>