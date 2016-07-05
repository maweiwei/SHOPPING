
//给表单绑定单机提交事件
document.login.onsubmit = function () {
    //获取用户输入
    var uname = this.uname.value;
    var password = this.password.value;
    var code = this.code.value;
    //验证值
    var result = new Array();
    if (uname.match(/^\s*$/)) {
	result['uname'] = '账号未填写';
    } else {
	result['uname'] = '';
    }
    
    if (password.length < 6 || password.length > 15) {
	result['password'] = '密码长度应为6-15位';
    } else {
	result['password'] = '';
    }
    
    if (code.length !=5) {
	result['code'] = '验证码不合法';
    } else {
	result['code'] = '';
    }
    //输出提示
    var flag = true;
    for (var key in result) {
	if (result[key]) flag = false;
	//新建span用来存放提示信息
	var span = this[key].nextSibling;
	//给span绑定类
	span.className = result[key] ? "error" : "right";
	//放入提示信息
	span.innerHTML = result[key];
	//追加到相应控件的后面
	this[key].parentNode.appendChild(span);
    }
    return flag;
}