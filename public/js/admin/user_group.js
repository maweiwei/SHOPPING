/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    $("#main-tab select").change(function(){
        var result = confirm("确定修改分组权限吗？");
		if (result == false) {
			location.href="/user_list";
			return;
		}
		//修改分组
		$.ajax({
			type : "post",
			url : "/admin/user/setGroup",
			data :  "groupid=" + $(this).val() + "&uid=" + $(this).attr("uid"),
			dataType: "json",
			success : function (result) {
                            alert(result.info);
                            location.href="/user_list";
                            return;
                            //if (!eval(result).status) location.reload();
			}
		});
    });
})

