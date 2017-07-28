$(function() {
    var g_table = $("table.data");
    var init_data_url = "data.php?action=init_data_list";
    $.get(init_data_url, function(data) {
        var row_item = $.parseJSON(data);
        // debugger;
        for (var i = 0, j = row_item.length; i < j; i++) {
            var data_dom = create_row(row_item[i]);
            g_table.append(data_dom);
        }
    });

    function delHandler() {
        var data_id = $(this).attr("dataid");
        var meButton = $(this);
        $.post("data.php?action=del_row", { dataid: data_id }, function(res) {
            if ("ok" == res) {
                $(meButton).parent().parent().remove();
            } else {
                alert('删除失败!');
            }
        })
    }

    function create_row(data_item) {
        // debugger;
        var row_obj = $("<tr></tr>");
        for (var k in data_item) {
            if ("id" != k) {
                var col_td = $("<td></td>");
                col_td.html(data_item[k]);
                row_obj.append(col_td);
            }
        }
        var delButton = $('<a href="javascript:;" class="optLink">删除 &nbsp;</a>');
        delButton.attr('dataid', data_item['id']);
        delButton.click(delHandler);
        var editButton = $('<a href="javascript:;" class="optLink">编辑 &nbsp;</a>');
        // editButton.click(editHandler);	
        var opt_td = $('<td></td>');
        opt_td.append(delButton);
        opt_td.append(editButton);
        row_obj.append(opt_td);
        return row_obj;
    }
    function editHandler(){
   //  	var dataid = $(this).parent().children('a').attr('dataid');;
    	
   //  	var currentRow = $(this).parent().parent();
    	
   //  	var td_fields = currentRow.find("td");
   //  	for (var i = 0; i < 8; i++) {
   //  		var templ = '<input type="text" class="txtField" value="' + td_fields[i].innerText + '" />';
			// td_fields[i].innerHTML=templ; 
   //  	}
    	
   //  	td_fields[8].remove();
   //      var col_opt = $('<td></td>');
   //  	var confirmBtn = $('<a href="javascript:;" class="optLink">确认 &nbsp;</a>');
   //      var cancelBtn = $('<a href="javascript:;" class="optLink">取消 &nbsp;</a>');

   //      confirmBtn.click(function() {
   //      	var currentRow = $(this).parent().parent();
   //          var input_fields = currentRow.find("input");
   //          var post_fields = {};
   //          for (var i = 0, j = input_fields.length; i < j; i++) {
   //              post_fields['col_' + i] = input_fields[i].value;
   //          }
   //          post_fields['dataid'] = dataid;
   //          $.post('data.php?action=edit_row', post_fields, function(res) {
   //              if (res) {
   //                  input_fields['id'] = dataid;
   //                  var postAddRow = create_row(input_fields);
   //                  currentRow.replaceWith(postAddRow);
   //              } else {
   //                  alert('添加失败');
   //              }
                
   //          });
   //      });
   //      cancelBtn.click(function() {
        	
   //      });
   //      col_opt.append(confirmBtn);

   //      col_opt.append(cancelBtn);
   //      td_fields.parent().append(col_opt);
    }
    function addHandler() {
        var new_line = $('<tr></tr>');
        for (var i = 0; i < 8; i++) {
            var new_col = $('<td><input type="text" class="txtField"/></td>')
            new_line.append(new_col);
        }
        var col_opt = $('<td></td>');
        var confirmBtn = $('<a href="javascript:;" class="optLink">确认 &nbsp;</a>');
        var cancelBtn = $('<a href="javascript:;" class="optLink">取消 &nbsp;</a>');
        confirmBtn.click(function() {
            var currentRow = $(this).parent().parent();
            var input_fields = currentRow.find("input");
            var post_fields = {};
            for (var i = 0, j = input_fields.length; i < j; i++) {
                post_fields['col_' + i] = input_fields[i].value;
            }
            $.post('data.php?action=add_row', post_fields, function(res) {
                if (0 < res) {
                    input_fields['id'] = res;
                    var postAddRow = create_row(input_fields);
                    // currentRow.replaceWith(postAddRow);
                } else {
                    alert('添加失败');
                }
            });
        });
        cancelBtn.click(function() {
            $(this).parent().parent().remove();
        });
        col_opt.append(confirmBtn);

        col_opt.append(cancelBtn);
        new_line.append(col_opt);
        g_table.append(new_line);
    }
    $('#addBtn').click(addHandler);

});