<{block name=head}>
<{/block}>

<{block name=body}>
	
	<button type="" class="btn btn-success" onclick="location.href='<{$base_url}>index.php/teacher_action/addExperiment/<{$course_id}>'">添加实验</button>
	<{foreach from=$exp_info item=value}>
		<p><{$value['exp_name']}> <a href="<{$base_url}>index.php/course/showExperiment/<{$value['exp_id']}>">开始实验</a> <a href="<{$value['exp_doc_path']}>" >doc</a></p>

	<{/foreach}>
<{/block}>