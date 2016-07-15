/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function () {
	$("#avartar").uploadify({
		//绑定swf文件
		swf : "/uploadify/uploadify.swf",
		//设置按钮样式
		buttonText : "更换头像",
		buttonImage: "/uploadify/ImgBtn.png",
		width : 50,
		height: 23,
                fileTypeDesc : "选择图片",
		fileTypeExts : "*.jpg;*.jpeg;*.png;*.gif",
		fileSizeLimit : 1*1024*1024*1024,
                method:"post",
                uploader:"/Home/goods/img",
                formData : {
			gid : document.fm.gid.value,
                        _token : document.fm._token.value,
		},
		onUploadSuccess : function (file, txt, response) {
                   eval("var res = "+txt);
                   if(res.status==false){
                       alert(res.info);
                   }
                    $("#img").attr("src",res.info);
		}
	});
})

