//给表单绑定事件
document.login.onsubmit = function () {
    //获取用户输入
    var uname = this.uname.value;
    var password = this.password.value;
    var result = new Array();
    if (uname.match(/^\s*$/)) {
	result['uname'] = '账号未填写';
    } else {
	result['uname'] = '';
    }
    
    if (password.match(/^\s*$/)) {
	result['password'] = '密码未填写';
    } else {
	result['password'] = '';
    }
    
    //输出提示
    var flag = true;
    for (var key in result) {
	if (result[key]) flag = false;
	//新建span来存放提示信息
	var span = this[key].nextSibling;
	//给span绑定类
	span.className = result[key] ? "error" : "right";
	//放入提示信息
	span.innerHTML = result[key];
	//追加到相应控件后面
	this[key].parentNode.appendChild(span);
    }
    return flag;
}