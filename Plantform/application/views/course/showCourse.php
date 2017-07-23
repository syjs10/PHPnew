<{block name=head}>

<{/block}>

<{block name=body}>
	<nav class="navbar navbar-default">
		<{if isset($smarty.session.username) }>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><!-- <{$smarty.session.username}> --> <span class="caret"></span></a>
		            <ul class="dropdown-menu">
		            	<li><a href="#">Action</a></li>
		            	<li><a href="#">Another action</a></li>
		            	<li><a href="#">Something else here</a></li>
		            	<li role="separator" class="divider"></li>
		            	<li><a href="#">Separated link</a></li>
		            </ul>
		        </li>
			</ul>
		<{else}>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="../login">登录</a></li>
			</ul>
		<{/if}>
	</nav>
	<button type="" class="btn btn-success" onclick="location.href='<{$base_url}>index.php/teacher_action/addExperiment/<{$course_id}>'">添加实验</button>
	<{foreach from=$exp_info item=value}>
		<p><{$value['exp_name']}> <a href="<{$base_url}>index.php/course/showExperiment/<{$value['exp_id']}>">开始实验</a> <a href="<{$value['exp_doc_path']}>" >doc</a></p>
	<{/foreach}>
<{/block}>