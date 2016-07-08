/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
    $("input:checkbox").click(function (){
//        alert($(this).val());
        $.ajax({
            type:"post",
            url : "/admin/group/setRule",
            data : "rule=" + $(this).val() + "&group=" + $(this).attr("groupid"),
            dataType : "json",
            success : function (result) {
                alert(result.info);
                location.href="/admin/group";
                return;
            }
        });
    });
})


