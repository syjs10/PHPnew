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
		// debugger;
		var row_obj = $("<tr></tr>");
		for (var k in data_item) {
			if ("id" != k) {
				var col_td = $("<td></td>");
				col_td.html(data_item[k]);
				row_obj.append(col_td);
			}
		}
		return row_obj;
	}
});
