<html>

	<head>
		<meta charset="utf-8">
		<title></title>
		<script type="text/javascript" src="{{asset('/js/home/add/js/safe/aywmq_qt.js')}}"></script>
		<script type="text/javascript" src="{{asset('/js/home/add/js/safe/da_opt.js')}}"></script>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="{{asset('/css/home/add/css/safe/css.css')}}" />
		<link rel="stylesheet" href="{{asset('/css/home/add/css/safe/common.min.css')}}" />
		<link rel="stylesheet" href="{{asset('/css/home/add/css/safe/ms-style.min.css')}}" />
		<link rel="stylesheet" href="{{asset('/css/home/add/css/safe/personal_member.min.css')}}" />
		<link rel="stylesheet" href="{{asset('/css/home/add/css/safe/Snaddress.min.css')}}" />
		<style>
			progress {
				width: 300px;
				border: 1px solid #ffffff;
				background-color: #e6e6e6;
				color: #0064B4;
				/*IE10*/
			}
			
			progress::-moz-progress-bar {
				background: #FFFFFF;
			}
			
			progress::-webkit-progress-bar {
				background: #ccc;
			}
			
			progress::-webkit-progress-value {
				background: #FF7700;
			}
		</style>
	</head>

	<body class="ms-body">
           
         @if(session("info")=="删除成功")
         <script>
         alert("删除成功");
         </script>
          @endif
          @if(session("info")=="删除失败")
         <script>
         alert("删除失败");
         </script>
          @endif
		<div id="" class="ng-top-banner"></div>
		<div class="ng-toolbar">
			<div class="ng-toolbar-con wrapper">
				<div class="ng-toolbar-left">
					<a class="ng-bar-node ng-bar-node-backhome" id="ng-bar-node-backhome" style="display: block;">
						<span><img src="{{asset('/images/home/add/img/Home.png')}}"')}}" style="margin-right: 10px;"/>返回唯品会首页</span>
					</a>
					<div class="ng-bar-node-box ng-site-nav-box">
						<a href="" class="ng-bar-node ng-bar-node-site">
							<span><img src="{{asset('/images/home/add/img/daohang.png')}}"" style="margin-right: 5px;" />网站导航</span><em class="ng-iconfont down"></em>
						</a>
						<div class="ng-sn-site-nav ng-d-box site-nav-child" style="display:none;">
							<dl class="sn-site-list lnb">
								<dt>
								    特色购物
								 </dt>
								<dd>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
								</dd>
							</dl>
							<dl class="sn-site-list">
								<dt>
							    主题频道
							   </dt>
								<dd>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
								</dd>
							</dl>
							<dl class="sn-site-list">
								<dt>
					    生活助手
					   </dt>
								<dd>
									<p><a target="_blank">###<i class="hot"></i></a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
								</dd>
							</dl>
							<dl class="sn-site-list">
								<dt>
					    会员服务
					   </dt>
								<dd>
									<p><a target="_blank">###<i class="hot"></i></a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
								</dd>
							</dl>
							<dl class="sn-site-list rnb">
								<dt>
					    更多热点
					   </dt>
								<dd>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###<i class="hot"></i></a></p>
								</dd>
							</dl>
							<a href="" class="ng-close"><em class="ng-iconfont"></em></a>
						</div>
					</div>

				</div>
				<div class="ng-toolbar-right">
					<a href="" class="ng-bar-node username-bar-node username-bar-node-showside" id="" rel="nofollow" style="display:none;">
						<span id="">{{session('homeUser')->nickname}}</span>
						<em class="hasmsg ng-iconfont"></em>
					</a>
					<div class="ng-bar-node-box username-handle" id="" style="display: block;">
						<a href="" rel="nofollow" class="ng-bar-node username-bar-node username-bar-node-noside">
							<span id="">{{session('homeUser')->nickname}}</span>
							<em class="hasmsg ng-iconfont"></em>
							<em class="ng-iconfont down"></em>
						</a>
						<div class="ng-d-box ng-down-box ng-username-slide" style="display:none;">
							<a href="" class="ng-vip-union" target="_blank" rel="nofollow">账号管理</a>
							<a href="" rel="nofollow">退出登录</a>
						</div>
					</div>
					<div class="ng-bar-node reg-bar-node" id="reg-bar-node" style="display: none;">
						<a href="" rel="nofollow" class="login">登录</a>
						<a href="" target="_blank" class="login reg-bbb" rel="nofollow">注册</a>
					</div>

					<div class="ng-bar-node-box myorder-handle">
						<a class="ng-bar-node ng-bar-node-fix touch-href ng-bar-node-pr5"><span>唯品会</span><em class="ng-iconfont down"></em></a>
						<div class="ng-down-box ng-d-box myorder-child" style="display:none;">
							<a>待支付<em id="waitPayCounts"></em></a>
							<a>待收货<em id="waitDeliveryCounts"></em></a>
							<a>待评价<em id="waitEvaluation"></em></a>
							<a>修改订单</a>
						</div>
					</div>
					<a class="ng-bar-node ng-bar-node-mini-cart" rel="nofollow" href="">
						<span><img src="{{asset('/images/home/add/img/购物车.png')}}"" />&nbsp;购物车</span>
						<span class="total-num-bg-box">
						<em></em>
						<i></i>
					</span>
						</span>
					</a>
					<div class="ng-bar-node-box mysuning-handle">
						<a href="http://my.suning.com" rel="nofollow" name="" class="ng-bar-node ng-bar-node-fix touch-href ng-bar-node-pr5"><span>收藏夹</span><em class="ng-iconfont down"></em></a>
						<div class="ng-down-box ng-d-box mysuning-child" style="display:none;">
							<a href="" rel="nofollow" target="_blank">我的二手</a>
							<a href="" rel="nofollow" target="_blank">我的金融</a>
							<a href="" rel="nofollow">我的收藏</a>
							<a href="" rel="nofollow">我的任性付</a>
							<a href="" rel="nofollow">我的优惠券</a>
							<a href="" rel="nofollow">打卡赚云钻</a>
							<a href="" class="ng-vip-union" target="_blank" rel="nofollow">会员联盟<em class="ng-iconfont"></em></a>
						</div>
					</div>

					<div class="ng-bar-node-box app-down-box">
						<a href="" target="_blank" rel="nofollow" class="ng-bar-node mb-suning touch-href">
							<span>关注唯品会</span>
						</a>
						<div class="ng-mb-box ng-d-box mb-down-child" style="display:none;">
							<div class="ng-code-box">
								<p class="ng-tip">
									<a href="" rel="nofollow" target="_blank"></a>
								</p>
								<a target="_blank">
									<img src="" height="80" width="80">
								</a>
							</div>
							<div class="ng-app-box">
								<div class="ng-app-list">
									<a href="" target="_blank" rel="nofollow" class="ng-app">
										<img src="" title="###"></a>
									<a href="" target="_blank" rel="nofollow" class="ng-app">
										<img src="" title="###"></a>
									<a class="ng-app">
										<img src="" title="###"></a>
									<a href="" target="_blank" rel="nofollow" class="ng-app">
										<img src="" title="###"></a>
								</div>
							</div>
							<a href="" target="_blank" rel="nofollow">
								<img src="" height="35" width="242">
							</a>
							<a href="javascript:void(0);" class="ng-close" rel="nofollow"><em class="ng-iconfont"></em></a>
						</div>
					</div>

					<a href="" class="ng-bar-node ng-bar-node-pr5" target="_blank"><span>卖家中心</span><em class="ng-iconfont down"></em></a>
					<div class="ng-bar-node-box service-handle">
						<a href="javascript:void(0);" class="ng-bar-node ng-bar-node-service ng-bar-node-fix touch-href ng-bar-node-pr5" rel="nofollow"><span>联系我们</span><em class="ng-iconfont down"></em>
				    </a>
						<div class="ng-down-box ng-d-box service-center-child ng-ser-list" style="display:none;">
							<a>帮助中心</a>
							<a>查找门店</a>
							<a>退换货</a>
							<a>帮客预约</a>
							<a>建议反馈</a>
							<a>在线咨询</a>
						</div>
					</div>
				</div>
				<div id="ng-minicart-slide-box"></div>
			</div>
		</div>
		<header class="ms-header ms-header-inner ms-head-position">
			<article class="ms-header-menu">
				<style type="text/css">
					.nav-manage .list-nav-manage {
						position: absolute;
						padding: 15px 4px 10px 15px;
						left: 0;
						top: -15px;
						width: 90px;
						background: #FFF;
						box-shadow: 1px 1px 2px #e3e3e3, -1px 1px 2px #e3e3e3;
						z-index: 10;
					}
					
					.ms-nav li {
						float: left;
						position: relative;
						padding: 0 20px;
						height: 44px;
						font: 14px/26px "Microsoft YaHei";
						color: #FFF;
						cursor: pointer;
						z-index: 10;
					}
				</style>
				<div class="header-menu">
					<div class="ms-logo">
						<a class="ms-head-logo" name="Myyigou_index_none_daohangLogo"><span style="font-size: 30px;color: #fff;font-weight: bold;    line-height: 28px;;">唯品会</span></a>

					</div>
					<nav class="ms-nav">
						<ul>
							<li class="nav-manage selected" style="background: #F2873B;">
								<a href="" data-url="">宝贝收藏</a></li>

							<li class="">
								<a href="" data-url="">店铺收藏<em></em></a><i class="nav-arrow"></i>
								
							</li>
							<li class="ms-nav-msg"><a>消息</a><i class="nav-arrow"></i></li>
						</ul>
						<div class="ms-search">
							<form>
								<input id="" type="text" value="">
								<a id="" href=""></a>
							</form>
						</div>
					</nav>
				</div>

			</article>

			<article class="ms-useinfo">
				<div class="header-useinfo" id="">
					<div class="ms-avatar">
						<div class="useinfo-avatar">
							<img src="{{session('homeUser')->avartar}}">
							<div class="edit-avatar"></div>
							<a class="text-edit-avatar">修改</a>
						</div>
						<a>sunshine</a>
					</div>

					<div class="ms-name-info">
						<div class="link-myinfo">
							<a>我的编号:99653</a>
						</div>
						<div class="info-member">
							<span class="name-member member-1">
        				 <i></i><a target="_blank" >注册会员</a></span>
							<span style="margin-left: 20px;">
        				 <a target="_blank" >我的资料</a></span>
						</div>
						<div class="info-safety">
							<span class="safety-lv lv-3">
        				<a >安全等级：<span>中</span></a>
							</span>
							<a class="bind-phone">
								<i style="background-image: url({{asset('/images/home/add/img/修改手机.png')}}");"></i>修改手机</a>
							<a class="bind-email">
								<i style="background-image: url({{asset('/images/home/add/img/绑定邮箱.png')}}");"></i>修改邮箱</a>
							<a class="manage-addr"><i style="background-image: url({{asset('/images/home/add/img/地址管理.png')}}");"></i>地址管理</a>
						</div>
					</div>
				</div>

			</article>
		</header>
		<div id="ms-center" class="personal-member">
			<div class="cont">

				<div class="cont-main"  style="width: 1210px;">
					<div style="margin-top: 20px;width: 1200px;">
						<font style="font-size: 16px;color: #F88600;font-weight: bold; margin-left:30px;">全部宝贝</font>
						<font style="font-size: 16px;color: #333333; font-weight:bold;margin-left:61px;"></font>
						<font style="font-size: 16px;color: #333333; font-weight:bold;margin-left:40px;"></font>
						<font style="font-size: 16px;color: #333333; font-weight:bold; margin-left:40px;"></font>
						<input type="button" value="宝贝对比" style=" color:#333333;height:34px;width:80px;background:#ffffff;border-color:#EDEDED;border-style:solid;margin-left:360px;">
						<input type="button" value="批量管理" style=" color:#333333;height:34px;width:80px;background:#ffffff;border-color:#EDEDED;border-style:solid;margin-left:8px;">
                                                 <form action="/Home/commodity/index" method="post"><input id="" type="text" name="keyword" value="{{$key}}" placeholder="请输入商品名字" style=" float: right;color:#333333;height:auto;margin-left: 10px;float: left;padding: 5px;">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <input  style="width:50px;height:30px;font-size: 15px;color:olive;" type="submit" value="搜 索">
						<div style="float: right; display: block;">
							
							
						</div>
                                                </form>
					</div>
					<div style="margin-top: 10px;height: 600px;width: 1200px; border:1px solid #EDEDED">
						<img src="{{asset('/images/home/add/img/frigidere.png')}}"" style="margin-left:10px;margin-top: 25px;margin-bottom: -3px;" />
						<font style="font-size: 12px;color: #8e8e8e;font-weight: bold; margin-top:25px;">全部宝贝</font>
						<img src="{{asset('/images/home/add/img/iphone.png')}}"" style="margin-left:80px;margin-top: 25px;margin-bottom: -3px;"  />
						<font style="font-size: 12px;color: #8e8e8e;font-weight: bold; margin-top:25px;margin-left: 10px;">数码 0</font>
						<img src="{{asset('/images/home/add/img/tennis-ball.png')}}"" style="margin-left:80px;margin-top: 25px;margin-bottom: -3px;" />
						<font style="font-size: 12px;color: #8e8e8e;font-weight: bold; margin-top:25px;margin-left: 10px;">户外运动 0</font>
						<img src="{{asset('/images/home/add/img/muffin.png')}}"" style="margin-left:80px;margin-top: 25px;margin-bottom: -3px;" />
						<font style="font-size: 12px;color: #8e8e8e;font-weight: bold; margin-top:25px;margin-left: 10px;">甜品 23</font>
						<img src="{{asset('/images/home/add/img/juice.png')}}"" style="margin-left:80px;margin-top: 25px;margin-bottom: -3px;" />
						<font style="font-size: 12px;color: #8e8e8e;font-weight: bold; margin-top:25px;margin-left: 10px;">饮料 3</font>
						<img src="{{asset('/images/home/add/img/tools-3.png')}}"" style="margin-left:80px;margin-top: 25px;margin-bottom: -3px;" />
						<font style="font-size: 12px;color: #8e8e8e;font-weight: bold; margin-top:25px;margin-left: 10px;">装修材料 5</font>
						<img src="{{asset('/images/home/add/img/tools-3.png')}}"" style="margin-left:80px;margin-top: 25px;margin-bottom: -3px;" />
						<font style="font-size: 12px;color: #8e8e8e;font-weight: bold; margin-top:25px;margin-left: 10px;">家电 0</font>
						<img src="{{asset('/images/home/add/img/tools-3.png')}}"" style="margin-left:80px;margin-top: 25px;margin-bottom: -3px;" />
						<font style="font-size: 12px;color: #8e8e8e;font-weight: bold; margin-top:25px;margin-left: 10px;">文具 0</font>

						<img src="{{asset('/images/home/add/img/钉子图标.png')}}"" style="float: right;height: 25px;" id="loginimg">
						<hr style=" border-style:solid;width:1200px;border-color:#f8c3b1;margin-top: 25px;"> </hr>
						  
						
                                                @foreach($data as $v)
						<div style="float: left;padding: 10px;margin-left: 10px;">
							<a href=""><img src="{{$v->img}}" style="min-width: 150px;" /></a>
							<br />
							<span style="color: #686868;">{{$v->name}}</span>
							<br/>
							<span style="color: #686868;margin-top: 23px;display:block;">
							<img src="{{asset('/images/home/add/img/组-42.png')}}" style="margin-bottom: -2px; height:15px;width:15px;margin-left:30px ;" />
							<font style="font-size:14px;color:#fb3201; font-weight: bold;">{{$v->price}}</font>
                                                        <font style="font-size:14px;color:#686868;TEXT-DECORATION: line-through;margin-left: 2px; ">原价{{$v->reprice}}</font>
                                                        <a href="/Home/commodity/destroy/{{$v->gid}}"> <font style="font-size:14px;color:#fb3201; font-weight: bold;">取消收藏</font> </a>                             
                                                       </span>
                                                        
						
						</div>
                                                @endforeach
						
					</div>
				<hr style=" border-style:solid;width: 1200px;border-color:#D3D3D3;"> </hr>
				<div style="margin-top: 20px;width: 1200px;">
						
                        
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="clear "></div>
		<div class="ng-footer ">

			<textarea class="footer-dom " id="footer-dom-02 ">
			</textarea>
			<div class="ng-fix-bar "></div>
		</div>
		<style type="text/css ">
			.ng-footer {
				height: 130px;
				margin-top: 0;
			}
			
			.ng-s-footer {
				height: 130px;
				background: none;
				text-align: center;
			}
			
			.ng-s-footer p.ng-url-list {
				height: 25px;
				line-height: 25px;
			}
			
			.ng-s-footer p.ng-url-list a {
				color: #666666;
			}
			
			.ng-s-footer p.ng-url-list a:hover {
				color: #f60;
			}
			
			.ng-s-footer .ng-authentication {
				float: none;
				margin: 0 auto;
				height: 25px;
				width: 990px;
				margin-top: 5px;
			}
			
			.ng-s-footer p.ng-copyright {
				float: none;
				width: 100%;
			}
			
			.root1200 .ng-s-footer p.ng-copyright {
				width: 100%;
			}
		</style>
		<script type="text/javascript " src="js/safe/ms_common.min.js "></script>
	</body>

</html>