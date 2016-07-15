/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//document.getElementById("form1").onclick = function(){
//    
//     var a = ++document.getElementById("form2").value;
//     alert(a);
//    
//}
//
function add(obj,p){
    
    var num = ++obj.nextSibling.nextSibling.value;
    obj.parentNode.parentNode.nextSibling.innerHTML="&yen;"+p*num;
    $(function(){
	$.ajax({
	    type:"post",
	    url:"/Home/shopcar",
	    data:"num="+num+"&sid="+$(obj).attr("sid")+"&pri="+p,
	    dataType:"json",
	    success:function(res){
		alert(res.info);
		location.reload();
		//document.getElementById("true").innerHTML = "&yen;"+res.info;
	    }
	});
    });
}
function plus(obj,p){
    if(obj.previousSibling.previousSibling.value==1)exit;
   var num = --obj.previousSibling.previousSibling.value;
   obj.parentNode.parentNode.nextSibling.innerHTML="&yen;"+p*num;
    $(function(){
	$.ajax({
	    type:"post",
	    url:"/Home/shopcar",
	    data:"num="+num+"&sid="+$(obj).attr("sid")+"&pri="+p,
	    dataType:"json",
	    success:function(res){
		alert(res.info);
		location.reload();
		//document.getElementById("true").innerHTML = "&yen;"+res.info;
	    }
	});
    });
}





















//$(function(){
//    $("#form1").click(function(){
//	 ++document.getElementById("form2").value;
//	// alert(document.getElementById("form2").value);
//	$.ajax({
//	    type:"post",
//	    url:"/Home/shopcar",
//	    data:"num="+$("#form2").val()+"&gid="+$(this).attr("gid"),
//	    dataType:"json",
//	    success:function(res){
////		alert(res.info);
//		location.reload();
//		document.getElementById("true").innerHTML = "&yen;"+res.info;
//	    }
//	});
//    });
//})
//
//$(function(){
//    $("#form3").click(function(){
//	 --document.getElementById("form2").value;
//	// alert(document.getElementById("form2").value);
//	$.ajax({
//	    type:"post",
//	    url:"/Home/shopcar",
//	    data:"num="+$("#form2").val()+"&gid="+$(this).attr("gid"),
//	    dataType:"json",
//	    success:function(res){
////		alert(res.info);
//		location.reload();
//		document.getElementById("true").innerHTML = "&yen;"+res.info;
//	    }
//	});
//    });
//})
