<html>
	<head>
		<meta charset="utf-8">
		<title>收货地址</title>
		<script type="text/javascript" src="{{asset('/js/home/add/js/safe/aywmq_qt.js')}}" ></script>
		<script type="text/javascript" src="{{asset('/js/home/add/js/safe/da_opt.js')}}" ></script>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<script type="text/javascript" src="{{asset('/js/home/add/js/jquery-1.9.1.min.js')}}"></script>
		<link rel="stylesheet" href="{{asset('/css/home/add/css/safe/css.css')}}" />
		<link rel="stylesheet" href="{{asset('/css/home/add/css/safe/common.min.css')}}" />
		<link rel="stylesheet" href="{{asset('/css/home/add/css/safe/ms-style.min.css')}}" />
		<link rel="stylesheet" href="{{asset('/css/home/add/css/safe/personal_member.min.css')}}" />
		<link rel="stylesheet" href="{{asset('/css/home/add/css/safe/Snaddress.min.css')}}" />
		<link rel="stylesheet" href="{{asset('/css/home/add/css/zpwd/sui.css')}}" />
		<script type="text/javascript" src="{{asset('/js/home/add/js/sui.js')}}" ></script>
	</head>
	<style>
		a{
			color: #000000;
		}
		.sui-table th, .sui-table td {
    padding: 6px 8px;
    line-height: 18px;
    text-align: left;
    vertical-align: middle;
    border-top: 1px solid #e6e6e6;
    font-size: 14px;
    color: #333333;
}
	</style>
	<body class="ms-body">
		<div id="" class="ng-top-banner"></div>
		<div class="ng-toolbar">
			<div class="ng-toolbar-con wrapper">
				<div class="ng-toolbar-left">
					<a  class="ng-bar-node ng-bar-node-backhome" id="ng-bar-node-backhome" style="display: block;">
						<span><img src="{{url('/images/home/add/img/Home.png')}}" style="margin-right: 10px;"/>唯品会</span>
					</a>
					<div class="ng-bar-node-box ng-site-nav-box">
						<a href="" class="ng-bar-node ng-bar-node-site" >
							<span><img src="{{url('/images/home/add/img/daohang.png')}}" style="margin-right: 5px;" />网站导航</span><em class="ng-iconfont down"></em>
						</a>
						<div class="ng-sn-site-nav ng-d-box site-nav-child" style="display:none;">
							<dl class="sn-site-list lnb">
								<dt>
								    特色购物
								 </dt>
								<dd>
									<p><a  target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a  target="_blank">###</a></p>
								</dd>
							</dl>
							<dl class="sn-site-list">
								<dt>
							    主题频道
							   </dt>
								<dd>
									<p><a  target="_blank">###</a></p>
									<p><a   target="_blank">###</a></p>
									<p><a  target="_blank">###</a></p>
									<p><a  target="_blank">###</a></p>
									<p><a  target="_blank">###</a></p>
									<p><a  target="_blank">###</a></p>
								</dd>
							</dl>
							<dl class="sn-site-list">
								<dt>
							    生活助手
							   </dt>
								<dd>
									<p><a  target="_blank">###<i class="hot"></i></a></p>
									<p><a  target="_blank">###</a></p>
									<p><a  target="_blank">###</a></p>
									<p><a  target="_blank">###</a></p>
									<p><a  target="_blank">###</a></p>
									<p><a  target="_blank">###</a></p>
								</dd>
							</dl>
							<dl class="sn-site-list">
								<dt>
					    会员服务
					   </dt>
								<dd>
									<p><a  target="_blank">###<i class="hot"></i></a></p>
									<p><a  target="_blank">###</a></p>
									<p><a  target="_blank">###</a></p>
									<p><a  target="_blank">###</a></p>
								</dd>
							</dl>
							<a href="" class="ng-close" ><em class="ng-iconfont"></em></a>
						</div>
					</div>

				</div>
				<div class="ng-toolbar-right">
					<a href="" class="ng-bar-node username-bar-node username-bar-node-showside" id="" rel="nofollow" style="display:none;">
						<span id="">吉米小子</span>
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
						<a href=""  rel="nofollow" class="login">登录</a>
						<a href="" target="_blank" class="login reg-bbb" rel="nofollow" >注册</a>
					</div>

					<div class="ng-bar-node-box myorder-handle">
						<a class="ng-bar-node ng-bar-node-fix touch-href ng-bar-node-pr5"><span>唯品会</span><em class="ng-iconfont down"></em></a>
						<div class="ng-down-box ng-d-box myorder-child" style="display:none;">
							<a >待支付<em id="waitPayCounts"></em></a>
							<a >待收货<em id="waitDeliveryCounts"></em></a>
							<a >待评价<em id="waitEvaluation"></em></a>
							<a >修改订单</a>
						</div>
					</div>
					<a class="ng-bar-node ng-bar-node-mini-cart"  rel="nofollow" href="">
						<span><img src="{{url('/images/home/add/img/购物车.png')}}" />&nbsp;购物车</span>
					<span class="total-num-bg-box">
						<em></em>
						<i></i>
					</span>
						</span>
					</a>
					<div class="ng-bar-node-box mysuning-handle">
						<a href="http://my.suning.com" rel="nofollow" name="" class="ng-bar-node ng-bar-node-fix touch-href ng-bar-node-pr5"><span>收藏夹</span><em class="ng-iconfont down"></em></a>
						<div class="ng-down-box ng-d-box mysuning-child" style="display:none;">
							<a href=""  rel="nofollow" target="_blank">###</a>
							<a href="" rel="nofollow"  target="_blank">###</a>
							<a href="" rel="nofollow" >###</a>
							<a href="" rel="nofollow">###</a>
							<a href="" rel="nofollow" >###</a>
							<a href="" rel="nofollow" >###</a>
							<a href="" class="ng-vip-union" target="_blank" rel="nofollow" >###<em class="ng-iconfont"></em></a>
						</div>
					</div>
					<div class="ng-bar-node-box app-down-box">
						<a href="" target="_blank"  rel="nofollow" class="ng-bar-node mb-suning touch-href">
							<span>关注唯品会</span>
						</a>
						<div class="ng-mb-box ng-d-box mb-down-child" style="display:none;">
							<div class="ng-code-box">
								<p class="ng-tip">
									<a href="" rel="nofollow"  target="_blank"></a>
								</p>
								<a  target="_blank">
									<img src=""  height="80" width="80">
								</a>
							</div>
							<div class="ng-app-box">
								<div class="ng-app-list">
									<a href="" target="_blank" rel="nofollow" class="ng-app">
										<img src="" title="###"></a>
									<a href="" target="_blank" rel="nofollow"  class="ng-app">
										<img src="" title="###"></a>
									<a  class="ng-app">
										<img src="" title="###"></a>
									<a href="" target="_blank" rel="nofollow"  class="ng-app">
										<img src="" title="###"></a>
								</div>
							</div>
							<a href="" target="_blank" rel="nofollow" >
								<img src="" height="35" width="242">
							</a>
							<a href=""  class="ng-close" rel="nofollow"><em class="ng-iconfont"></em></a>
						</div>
					</div>
					<a href="" class="ng-bar-node ng-bar-node-pr5"  target="_blank"><span>卖家中心</span><em class="ng-iconfont down"></em></a>
					<div class="ng-bar-node-box service-handle">
						<a href="" class="ng-bar-node ng-bar-node-service ng-bar-node-fix touch-href ng-bar-node-pr5" rel="nofollow" ><span>联系我们</span><em class="ng-iconfont down"></em>
				    </a>
						<div class="ng-down-box ng-d-box service-center-child ng-ser-list" style="display:none;">
							<a >帮助中心</a>
							<a >查找门店</a>
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
					.titles{
						font-size: 12px;
						color: #333333;
						/*font-weight: bold;*/
					}
					h3 {
					    margin: 0px 0;
					    font-weight: bold;
					    font-size: 14px;
					    line-height: 18px;
					    color: inherit;
					    text-rendering: optimizelegibility;
					}
				</style>
				<div class="header-menu">
					<div class="ms-logo">
						<a class="ms-head-logo"  name="Myyigou_index_none_daohangLogo"><span style="font-size: 30px;color: #fff;font-weight: bold;    line-height: 28px;;">唯品会</span></a>
						
					</div>
					<nav class="ms-nav">
						<ul>
							<li class=""><a href="" data-url="" >首页</a><i class="nav-arrow"></i></li>
							<li class="nav-manage selected">
								<a href="" data-url="" >账户管理<em></em></a><i class="nav-arrow"></i>
								<div class="list-nav-manage " hidden="">
									<p class="nav-mge-hover">账户管理<em></em></p>
									<p><a >个人资料</a></p>
									<p><a >安全设置</a></p>
									<p><a >账号绑定</a></p>
									<p><a >地址管理</a></p>
								</div>
							</li>
							<li class="ms-nav-msg"><a >消息</a><i class="nav-arrow"></i></li>
						</ul>
						<div class="ms-search">
							<form >
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
							<img src="{{url(session('homeUser')->avartar)}}">
							<div class="edit-avatar"></div>
							<a class="text-edit-avatar" >修改</a>
						</div>
						<a >sunshine</a>
					</div>

					<div class="ms-name-info">
						<div class="link-myinfo">
							<a >我的编号:99653</a>
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
							<a class="bind-phone" >
								<i style="background-image: url(img/修改手机.png);"></i>修改手机</a>
							<a class="bind-email" >
								<i style="background-image: url(img/绑定邮箱.png);"></i>修改邮箱</a>
							<a  class="manage-addr" ><i style="background-image: url(img/地址管理.png);"></i>地址管理</a>
						</div>
					</div>
				</div>

			</article>
		</header>
		<div id="ms-center" class="personal-member">
			<div class="cont">
				<div class="cont-side">
					<div class="side-neck">
						<i></i>
					</div>
					<div class="ms-side">
						<article class="side-menu side-menu-off">
							<dl class="side-menu-tree">
								<dt>账户管理</dt>
								<dd>
									<a ><span ></span>我的资料</a>

								</dd>
								<dd>
									<a ><span></span>安全设置</a>

								</dd>
								<dd>
									<a ><span></span>账号绑定</a>

								</dd>
								<dd>
									<a style="color:#f70"><span class="active"></span>地址管理</a>

								</dd>
							</dl>

							<a ison="on" class="switch-side-menu icon-up-side"><i></i></a>
						</article>
					</div>
				</div>
				<div class="cont-main" >
					<div class="main-wrap mt15">
                                            <form action="/Home/adress/edit" method="post">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                               <input type="hidden" name="id" value="{{$data->id}}"/>
						<h3>
	                        <strong style=" font-size: 14px;">收货地址</strong>
	                    </h3>
						<div class="user-profile clearfix" style="margin-left: 0px;width: 100%;border: 0px;">
							<div class="user-profile-wrap" style="width: 100%;height: 400px;">
								<p style="margin-left: 70px;font-size: 14px;"><span style="color:#F88600;font-size: 14px;">
							<div style=" margin-left: 70px;margin-top: 30px;height: 30px;">
								<span style="color: #F2873B;">*&nbsp;</span><span class="titles">所在地区:</span>
								<select name="city" style="padding:5px;margin-left: 14px" onchange="c(this);"> 
                                                                        <option  value="北京">北京</option>
                                                                        <option  value="上海">上海</option>
									<option  value="台湾">台湾</option>
								</select>
								<select  id="two" name="city2" style="height: 30px;width: 70px;color: #F2873B;"> 
									<option  value="昌平" >昌平</option>
									<option  value="海淀" >海淀</option>
									<option  value="朝阳" >朝阳</option>
								</select>
							</div>
							<div style="margin-left: 70px;margin-top: 50px;">
								<span style="color: #F2873B;">*&nbsp;</span><span class="titles">详细地址:</span>
							</div>
							<div style="margin-left: 150px;margin-top:-40px;">
								<textarea style="width:500px;height: 90px;padding: 5px;" name="city3" value="{{$data->adress}}" placeholder="建议您如实填写详细收货地址，例如街道 名称，门牌号码，楼层和房间号等信息"></textarea>
							</div>
							
							<div style="margin-left: 80px;margin-top: 20px;">
								<span class="titles">邮政编号:</span>
								<input type="text" name="postcode" value="{{$data->postcode}}" placeholder="如您不清楚地区邮递号，请填写000000" style="padding: 5px;width: 300px;margin-left: 14px;" />
							</div>
							
							<div style="margin-left: 55px;margin-top: 30px;">
								<span style="color: #F2873B;">*</span>
								<span class="titles">收货人姓名:</span>
								<input type="text" name="uname" value="{{$data->uname}} " placeholder="长度不超过25个字符" style="padding: 5px;width: 300px;margin-left: 14px;" />
							</div>
							<div style="margin-left: 80px;margin-top: 30px;">
								<span class="titles">手机号码:</span>
								<select style="padding: 5px;margin-left: 14px;">
									<option>中国大陆+86</option>
								</select>
								<input type="text"  name="phone" value="{{$data->phone}}" placeholder="手机号码必须填写"  style="padding: 5px;width: 200px;"/>
							</div>
							
							<div style="margin-left: 150px;margin-top: 10px;">
								
								<div class="am-u-sm-7 am-u-sm-offset-3" style="padding-right: 0rem;"> 
									<label class="checkbox-pretty inline ">
										<input type="checkbox" checked="checked"><br/>
										<span style="font-size: 12px;color: #878787;">
											<font style="font-size: 12px;color: #333333;">设为默认地址</font>
										</span> </label> </div>
                                                            @if(count($errors)>0)
                                                            @foreach($errors->all() as $v)
                                                            {{$v}}
                                                            @endforeach
                                                            @endif
                                                                    
							   {{session("info")}}
							</div>
							
							
							</div>
							
						</div>
                                                <input type="submit" value="提交" style="margin-top:10px;margin-left:150px; background-color:#F37B1D ;color: #fff;width: 100px;height: 30px;border: 0px;border-radius: 5px;">
                                            </form>
					</div>
				</div>
						
				
				
			</div>
		</div>
		<div class="clear"></div>
		<div class="ng-footer">
			<textarea class="footer-dom" id="footer-dom-02">
			</textarea>
			<div class="ng-fix-bar"></div>
		</div>
		<style type="text/css">
			.sui-table td 
			{
				font-size: 14px;
			}
			.sui-table td 
			{
				font-size: 12px;
			}
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
		<script type="text/javascript" src="{{asset('/js/home/add/js/safe/ms_common.min.js')}}" ></script>
                <script src="{{asset('/js/home/perfect/city.js')}}"></script>
	</body>

</html>