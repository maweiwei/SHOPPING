<!DOCTYPE HTML>
<html>
	<head>
		<title>注册页</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="{{asset('/css/home/create/zhuce.css')}}"/>
        </head>
	<body>
		<div id="body">
			<div id="head">
				<div id="head-left">
					<img src="{{asset('/images/home/create/5.png')}}"/>
				</div>
				<div id="head-right">
				</div>
				<div class="c">
				</div>
			<div id="body">
				<div id="body-left">
					<img src="{{asset('/images/home/create/1.jpg')}}"/>
				</div>
				<div id="body-right">
                                        <div id="form">
					<form action="{{url("/Home/user/add")}}" method="post">
						<a id="zc">欢迎注册</a>
						<a id="zjdl">已注册可直接登录</a>
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <br/>
						<input class="a" type="tel" name="uname" value="" placeholder="&nbsp;请输入手机号码"/>
                                                <span>
                                                </span>
						<br/>
						<input class="a" type="password" name="password" value="" placeholder="&nbsp;请输入登录密码">
						<br/>
						<input class="a" type="password" name="repassword" value="" placeholder="&nbsp;请再次输入登录密码">
						<br/>
                                                <input class="a" type="text" name="nickname" value="" placeholder="&nbsp;请输入昵称"/>
                                                <br/>
                                                <label><input type="radio" name="sex" value="男">&nbsp;&nbsp;&nbsp;先生&nbsp;&nbsp;</label>
						<label><input type="radio" name="sex" value="女">&nbsp;&nbsp;&nbsp;女士</label>
						<br/>
						<input class="b" type="text" name="code" value="" placeholder="&nbsp;请输入验证码">&nbsp;&nbsp;<img align="center" style="margin-top:-9px;" src="{{ url('/captcha')."/". rand() }}" class="b" onclick="this.src = this.src.replace(/\d+$/, '') + Math.random();"/>
						<br/>
						<button id="button">立即注册</button>
					</form>
                                        </div>
                                        <div id="errors">
                                            @if(count($errors)>0)
                                                        @foreach($errors->all() as $v)
                                                            <p><font size="2" color="red">{{$v}}</font></p>
                                                        @endforeach
                                            @endif
                                            &nbsp;&nbsp;<font color="red" size="2">{{session("info")}}</font>   
					</div>
                                </div>
			</div>
                            
			</div>
			</div>
			
		</div>
		
		
	</body>
</html>