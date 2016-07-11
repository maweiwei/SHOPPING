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
					<form action="/Home/logTodo" name="login" method="post">
						<a id="zc">xxx,欢迎回来！请登录</a>
						<input hidden="_token" name="_token" value="{{csrf_token()}}"/>
						<p><input class="a" type="text" name="uname" value="" placeholder="&nbsp;邮箱/手机/QQ号"/><span></span></p>
						<p><input class="a" type="password" name="password" value="" placeholder="&nbsp;密码"/><span></span></p>
<!--						<a href=""><div id="denglu"></div></a>-->
						<input type="submit" value="登录" style="background:#DC3180; color:#FFF; font-size:16px; letter-spacing:5px; border-radius:5px; height:40px;width:140px; border:none;">&nbsp;&nbsp;<font color="red" size=3>{{ session("info") }}</font>
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
		
		<script src="{{ asset('/js/home/login/login_index.js') }}"></script>
	</body>
</html>