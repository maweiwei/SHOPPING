//给表单绑定事件
$(function(){
    $("#test").keyup(function(){
	$.ajax({
	    type:"post",
	    url:"/Home/user/test",
	    data:"uname="+$(this).val(),
	    dataType:"json",
	    success:function(res){
		//alert(res.info);
		if(res.status==false || document.getElementById("test").value ==""){
		   document.getElementById("test").nextSibling.innerHTML = "<img src='/images/admin/login/error.gif'>"+res.info;
		}else if(res.status==true){
		    document.getElementById("test").nextSibling.innerHTML = "<img src='/images/admin/login/right.gif'>";
		}
	    }
	})
    });
});