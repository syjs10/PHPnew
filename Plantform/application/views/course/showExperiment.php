<{block name=head}>
<style type="text/css" media="screen">
	div{
		border: 1px solid #ccc;
		height: 100%;
	}
	iframe{
		width: 100%;
		height: 100%;
		border:0px;
	}
</style>
<{/block}>

<{block name=body}>

<div class="container">
	<div class="row">
		<div class="col-md-9" style="padding: 0px;">
			<iframe src="<{$base_url}>index.php/docker/show_docker"  id="noVNC"  onload="noVNC.focus()"></iframe>
		</div>
		<div class="col-md-3 right_bar">
			<iframe src="<{$exp_info['exp_doc_path']}>" height="90%"></iframe>
		</div>
	</div>
</div>


<{/block}>