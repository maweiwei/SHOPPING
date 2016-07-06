<!DOCTYPE HTML>
<html>
	<head>
		<title>登录页</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="{{asset('/css/home/login/denglu.css')}}"/>
	</head>
	<body>
		<div id="body">
			<div id="head">
				<div id="head-left">
					<img src="{{asset('/images/home/login/4.png')}}"/>
				</div>
				<div id="head-right">
				</div>
				<div class="c">
				</div>
			<div id="body">
				<div id="body-left">
					<img src="{{asset('/images/home/login/1.jpg')}}"/>
				</div>
				<div id="body-right">
					<form action="" method="">
						<a id="zc">xxx,欢迎回来！请登录</a>
						<br/>
						<input class="a" type="text" name="uname" value="" placeholder="&nbsp;邮箱/手机/QQ号"/>
						<br/>
						<input class="a" type="password" name="pass" value="" placeholder="&nbsp;密码"/>
						<br/>
						<a href=""><div id="denglu" ></div></a>
						<div class="c"></div>
						<input type="checkbox" name=""><a id="agree">&nbsp;记住用户名</a>
						<div id="forget">
							<span id="mima">
							忘记密码&nbsp;|&nbsp;
							</span>
							<span id="free">
							<a href="{{url('/Home/create')}}">免费注册</a>
							</span>
						</div>
					</form>
				</div>
			</div>
			</div>
			
		</div>
		
		
	</body>
</html>