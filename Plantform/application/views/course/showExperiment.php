
<{block name=head}>
<style type="text/css" media="screen">
	div{
		border: 1px solid #ccc;
		height: 100%;  
	}
</style>
<{/block}>

<{block name=body}>

<div class="container">
	<div class="row">
		<div class="col-md-9"></div>
		<div class="col-md-3 right_bar">
			<iframe src="<{$exp_info['exp_doc_path']}>" style="width: 100%;height: 100%; border:0px;"></iframe>
		</div>
	</div>
</div>

<{/block}>