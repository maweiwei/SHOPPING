<html>
	<head>
		<title>唯品会-我的购物袋</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="{{ asset("css/home/car/shopbag.css") }}"/>
		<script src="/uploadify/jquery-1.8.3.min.js"></script>
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<script>
		$.ajaxSetup({
		    headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		    });
		</script>
	</head>
	<body>
		<div id="top">
			<div id="top-left">
			</div>
			<div id="top-right">
				<div id="t-r-t">
					<ul>
						<li><a href="">你好，{{ session("homeUser")->nickname }}</a></li>
						<li><a id="vip" href=""></a></li>
						<li><a href="{{ url("Home/logOut") }}">[退出]</a></li>
						<li><a href="{{ url("Home/indent") }}">订单管理</a></li>
						<li><a>|</a></li>
						<li><a id="tel" href=""></a></li>
						<li><a href="">400-6879-888</a></li>
						<li><a>|</a></li>
						<li><a id="server" href=""></a></li>
						<li><a href="">客服在线</a></li>
						<li><a>|</a></li>
						<li><a id="people" href=""></a></li>
						<li><a href="">会员服务</a></li>
						<li><a id="down" href=""></a></li>
					</ul>
				</div>
				<div class="c" id="t-r-b">
					<ul>
						<li><a id="bzh" href=""></a></li>
						<li><a href="">100%正品保证</a></li>
						<li><a id="seven" href=""></a></li>
						<li><a href="">七天无理由放心退</a></li>
						<li><a id="tui" href=""></a></li>
						<li><a href="">退货返运费</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	    <hr class="c"/>
	<center><font size="7" color="#f3168a">查看购物袋</font></center>
		<hr class="d"/>
		
		
		
		<div id="liucheng">
			
		</div>
		<div id="liucheng2">
			<div id="content1">查看购物袋==》
			</div>
			<div id="content2">确认订单信息==》
			</div>
			<div id="content3">成功提交订单
			</div>
		</div>
		
		<div class="c" id="body">
			<div id="body-top">
				<div id="b_t1">唯品会</div>
				<div id="b_t2">发货订单</div>
				<div id="b_t6">操作</div>
				<div id="b_t5">小计</div>
				<div id="b_t4">数量</div>
				<div id="b_t3">单价</div>
			</div>
		     @foreach($car as $tmp)
			<div id="body-middle"> 
				<div id="cloth">
					<a href="{{ url("/home/category/goods/{$tmp->gid}") }}"><img width="58" height="74"src="{{ $tmp->img }}"/></a>
				</div>
				<div id="desc">
					 <div id="baby" style="width:200px;"><div>{{ $tmp->name }}</div>
					 <div>尺码：{{ $tmp->size }}</div>
					 </div>
					 <div id="money">
						<div id="cost">&yen;{{ $tmp->price }}</div>
						<div id="cost2">&yen;{{ $tmp->reprice }}</div>
					 </div>
					 <div id="count">
						<form action="" method="">
							<input class="form1" sid="{{ $tmp->sid }}" type="button" value="+" onclick="add(this,$pri={{ $tmp->price }})">
							<input class="form2" type="text" name="text" disabled size="2" value="{{ $tmp->number }}">
							<input class="form3" sid="{{ $tmp->sid }}" type="button" value="-" onclick="plus(this,$pri={{ $tmp->price }})">
						</form>
					 </div><div id="true">&yen;{{ $tmp->price*$tmp->number }}</div>
				    <script src="/js/home/car/form.js"></script>
					 
					 <div id="boxx">
					    <a href="{{ url("/Home/car/delete/{$tmp->gid}") }}"><div id="box1"></div>
					     <div id="box2"></div></a>
					 </div>
				</div>
			    
			</div>
		     
		     
		     
		     <div style="clear:both;border:1px solid #444;"></div>
		     @endforeach
			<div class="c" id="body-bottom">
				<div id="b_b1">运费
				</div>
				<div id="b_b2">唯品会发货订单满288元可免运费
				</div>
			</div>
		</div>
		<div id="h" style="height:70px;"></div>
		<div class="c" id="body">
			<div id="body-middle"> 
				<div id="cloth">
					<p><input type="button" value="使用优惠券  ∨" style="background:#FFF;color:#F1019D;border:1px solid #F1019D;width:125;height:30;border-radius: 5px;"></p><div style="margin-bottom:10px;"></div>
					<p><input type="button" value="使用优惠口令 ∨" style="background:#FFF;color:#F1019D;border:1px solid #F1019D;width:125;height:30;border-radius: 5px;"></p>
				</div>
				<div id="desc" style="margin-right:0px;">
					<div style="float:right;margin-left:50px;">
					    <p>￥{{ $sum }}</p>
					    <p>￥{{ $sum }}</p>
					</div>
					<div style="float:right;margin-left:50px;">
					    <p>共{{ $num }}件商品 商品金额</p>
					    <p>总金额（未含运费）</p>
					</div>
				</div>
			</div>
			<div class="c" id="body-bottom">
				<div style="float:right;maring-right:0;">
				    <a href="{{ url("/Home/subcar") }}"><input id="jiesuan" type="button" value="立即结算" style="width:165;height:100%; background:#F1019D;color:#FFF;border:none;font-size:20;"/></a>
				</div>
			</div>
		</div>
		
		<div id="h" style="height:70px;"></div>
		 <div class="g-ft">
        <div id="J_vip_common_footer"><!-- 公用尾部模板 common域1-->

<link href="{{ url("/css/home/car/nullcar3.css") }}" rel="stylesheet" type="text/css">

<footer id="footer" class="footer">
  <div class="footer-inner">
        <div class="footer-infor">
      <p class="footer-infor-link">
        <a href="" title="关于我们">关于我们</a>|
           <a href="" title="About us">About us</a>|
           <a href="" title="Investor Relations">Investor Relations</a>|
           <a href="" title="媒体报道">媒体报道</a>|
           <a href="" title="品牌招商">品牌招商</a>|
           <a href="" title="隐私条款">隐私条款</a>|
           <a href="" title="友情链接">友情链接</a>|
           <a href="" title="唯品诚聘">唯品诚聘</a>|
           <a href="" title="365爱心基金">365爱心基金</a>|
           <a href="" title="唯品卡">唯品卡</a>|
           <a href="" title="唯品地图">唯品地图</a>|
           <a target="_blank" href="" title="品牌大全">品牌大全</a>|
           <a target="_blank" href="" title="联系我们">联系我们</a>
      </p>
      <p class="footer-infor-txt">
        Copyright © 2008-2016 vip.com，All Rights Reserved
        <a rel="nofollow" href="">粤ICP备08114786号</a> <a rel="nofollow" href="">ICP经营许可证：粤B2-20080329 </a><a rel="nofollow" href="">网络文化经营许可证：粤网文〔2015〕1528-229</a>
        <br>使用本网站即表示接受<a rel="nofollow" href="">唯品会用户协议</a>。版权所有 <a rel="nofollow" href="">广州唯品会信息科技有限公司</a>
      </p>
    </div>
  </div>
  <div class="footer-ft">
    <p class="footer-pic">
      <a  href="">
        <i class="footer-pic-ico01" title=""></i>
      </a>
      <a  href="">
        <i class="footer-pic-ico04" title="消费维权服务站"></i>
      </a>
      <a  href="">
        <i class="footer-pic-ico05" title="红盾电子链接标识"></i>
      </a>
      <a  href="">
        <i class="footer-pic-ico06" title="网络警察报警平台"></i>
      </a>
      <a  href="">
        <i class="footer-pic-ico07" title="公安局网络警察支队"></i>
      </a>
      <a  href="" id="___szfw_logo___">
        <i class="footer-pic-ico09" title="诚信网站"></i>
      </a>
      <a  href="">
        <i class="footer-pic-ico10" title="可信网站"></i>
      </a>
    </p>
    <!-- footer_pic end -->
  </div>
</footer>
<!-- footer end -->


<style type="text/css">
  .comm_code{position: fixed;width: 140px;height: 196px;left: 50%;bottom: 30px;margin-left: -660px;z-index: 1;text-align: right;}
</style>






</div>
    </div>
	</body>
</html>