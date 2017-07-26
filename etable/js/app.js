$(function () {
	var g_table = $("table.data");
	var init_data_url = "data.php?action=init_data_list";
	$.get(init_data_url, function(data){
		var row_item = $.parseJSON(data);
		// debugger;
		for (var i = 0, j = row_item.length; i < j; i++) {
			var data_dom = create_row(row_item[i]);
			g_table.append(data_dom);
		}
	});
	function create_row(data_item){
		return $('<tr><td colspan="9"><h1>Hello this create dome</h1></td></tr>');
	}
});
