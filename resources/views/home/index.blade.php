<<<<<<< HEAD
@include("home.common.head")
<div id="body">
=======
<!DOCTYPE HTML>
<html>
  
	<head>
		<title>唯品会首页</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="{{asset('/css/home/index/wph.css')}}">
	</head>
	<body>
		<!-- head top -->
		<div id="head">
			<div id="head_top">
			<!-- <img src="{{asset('/css/home/index/1.jpg')}}"> -->
			</div>
			<div id="head_center">
				<div id="h_c_content">
					<div id="contentl">
						<div id="bj">北京	
						</div>
						<div id="bj-pic">
						</div>
					</div>
					<div id="contentr">
						<ul>
							<li><a href="">手机版</a></li>
							<li><a href="">时尚会</a></li>
							<li><a href="">客户服务</a></li>
							<li><a href="">会员俱乐部</a></li>
							<li><a href="">积分兑换</a></li>
							<li><a href="">联名卡申请</a></li>
							<li><a href="">唯品卡</a></li>
							<li><a>|</a></li>
							@if(Session::has('homeUser'))<li><a href="{{url("/Home/commodity/index")}}">我的收藏</a></li>
							<li><a href="">我的订单</a></li>
                                                        <li><a href="{{url('/Home/user/personal')}}">个人中心</a></li>@else
                                                        <li><a href="{{url('/Home/login')}}">登录</a></li>
                                                     @endif
                                                        
                                                        
						</ul>
					</div>
				</div>
			</div>
			<div class="c"></div>
			<div id="head_bottom">
				<span id="h_b_left">
					<img src="{{asset('/images/home/index/4.png')}}"/>
				</span>
				<div id="h_b_right"/>
					<img src="{{asset('/images/home/index/5.png')}}"/>
					<img src="{{asset('/images/home/index/6.png')}}"/>
					<img src="{{asset('/images/home/index/7.png')}}"/>
					<span id="shopbag">
					<div id="bag">
					</div>
					<div id="shop">购物袋(<a id="num">0</a>)
					</div>
					</div>
				</span>
			</div>
		</div>
		<div class="c"></div>
		<!-- shopbody  -->
		<!-- body head -->
		<div id="body_head">
			<div id="head_left">
				<ul>
					<li><a id="first" href="">首页</a></li>
					<li><a href="">美妆</a></li>
					<li><a id="baby" href=""><img src="{{asset('/images/home/index/7.gif')}}"/>母婴</a></li>
					<li><a href="">居家</a></li>
					<li><a href="">美妆</a></li>
					<li><a href="">居家</a></li>
					<li><a href="">男士</a></li>
					<li><a href="">旅行</a></li>
					<li><a href="">全球特卖</a></li>
					<li><a href="">明天上线</a></li>
				</ul>
			
			<div id="head_right">
				<a href="">在售分类</a>
			</div>
			</div>
		</div>
		<!-- <div id="ima" class="c"></div> -->
		<!-- body top -->
		<div id="body_top">
		<!-- <img src="{{asset('/images/home/index/a.jpg')}}"/> -->
		</div>
		<!-- body main -->
		<div id="body">
>>>>>>> c98d5fcfb76f08a33d8a6cd67d450a680cf39a43
			<div id="body_main">
				<div id="main_body">
					<div><img src="{{asset('/images/home/index/15.png')}}"/>
					</div>
					<div class="body-main"><a href=""><img src="{{asset('/images/home/index/13.jpg')}}"/></a>
					</div>
					<div class="body-main"><a href=""><img src="{{asset('/images/home/index/14.jpg')}}"/></a>
					</div>
					<div class="body-main"><a href=""><img src="{{asset('/images/home/index/b.jpg')}}"/></a>
					</div>
				</div>
				<div id="body_right"/>
					<div><img src="{{asset('/images/home/index/2.gif')}}"/>
						<a>会员俱乐部，0元抢大奖！</a>
					</div>
					<div class="body-right"><a href=""><img src="{{asset('/images/home/index/16.jpg')}}"/></a>
					</div>
					<div class="body-right"><a href=""><img src="{{asset('/images/home/index/17.jpg')}}"/></a>
					</div>
					<div class="body-right"><a href=""><img src="{{asset('/images/home/index/18.jpg')}}"/></a>
					</div>
				<div>
			</div>
		</div>
		<div class="c"></div>
		<!-- body foot -->
		<div id="body_image">
			<!-- <img src="002.png"/>-->
		</div> 
			<div id="body_foot">
				<div id="body_image">
					<a href=""><img src="{{asset('/images/home/index/002.png')}}"/></a>
				</div>
				<span><a href=""><img src="{{asset('/images/home/index/01.jpg')}}"/></a>
				</span>
				<span><a href=""><img src="{{asset('/images/home/index/02.jpg')}}"/></a>
				</span>
				<span><a href=""><img src="{{asset('/images/home/index/03.jpg')}}"/></a>
				</span>
				<!-- <span><img src="04.jpg"/>
				</span> -->
				<span><a href=""><img src="{{asset('/images/home/index/05.jpg')}}"/></a>
				</span>
				<span><a href=""><img src="{{asset('/images/home/index/06.jpg')}}"/></a>
				</span>
				<span><a href=""><img src="{{asset('/images/home/index/6.jpg')}}"/></a>
				</span>
			</div>
		</div>
</div>		
@include("home.common.foot")            