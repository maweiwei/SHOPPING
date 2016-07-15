<!DOCTYPE html>
<html lang="zh" class="device-pc">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>唯品会-我的购物袋</title>
    <link href="{{ url("/css/home/car/nullcar1.css") }}" rel="stylesheet">
    <link href="{{ url("/css/home/car/nullcar2.css") }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/home/car/shopbag.css") }}"/>
    
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
						<li><a href="">订单管理</a></li>
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
    
    
    
    <div class="g-bd">
        <div class="g-row">
                                <div class="m-cart-tips cart-empty-tips">
                        <span class="u-icon icon-cart-tips icon-cart-empty"><img src="{{ asset("/images/home/car/xiaofeng.jpg") }}" style="width:111px;height:149px;"></span>
                        <div class="cart-tips-cnt">
                            <div class="cart-tips-text">
                                <p>收货完成，<br>快去评论吧！</p>
                            </div>
                            <div class="cart-tips-actions">
                                <a class="ui-btn-primary ui-btn-medium" href="{{ url("") }}" role="button">评论</a><a class="ui-btn-default  ui-btn-medium" href="{{ url("/Home/history") }}" role="button">稍后再评论</a>
                            </div>
                        </div>
                    </div>
					
                    <div id="J_cart_history_record_wrapper">
				
        </div><!-- / .g-row -->
    </div><!-- / .g-bd -->


    <div class="g-ft">
        <div id="J_vip_common_footer"><!-- 公用尾部模板 common域1-->

<link href="{{ url("/css/home/car/nullcar3.css") }}" rel="stylesheet" type="text/css">

<footer id="footer" class="footer">
  <div class="footer-inner">
        <div class="footer-infor">
      <p class="footer-infor-link">
        <a target="_blank" rel="nofollow" href="" title="关于我们">关于我们</a>|
           <a target="_blank" rel="nofollow" href="" title="About us">About us</a>|
           <a target="_blank" rel="nofollow" href="" title="Investor Relations">Investor Relations</a>|
           <a target="_blank" rel="nofollow" href="" title="媒体报道">媒体报道</a>|
           <a target="_blank" rel="nofollow" href="" title="品牌招商">品牌招商</a>|
           <a target="_blank" rel="nofollow" href="" title="隐私条款">隐私条款</a>|
           <a target="_blank" rel="nofollow" href="" title="友情链接">友情链接</a>|
           <a target="_blank" rel="nofollow" href="" title="唯品诚聘">唯品诚聘</a>|
           <a target="_blank" rel="nofollow" href="" title="365爱心基金">365爱心基金</a>|
           <a target="_blank" rel="nofollow" href="" title="唯品卡">唯品卡</a>|
           <a target="_blank" rel="nofollow" href="" title="唯品地图">唯品地图</a>|
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
      <a rel="nofollow" target="_blank" href="">
        <i class="footer-pic-ico01" title="银联特约商户"></i>
      </a>
      <a rel="nofollow" target="_blank" href="">
        <i class="footer-pic-ico04" title="消费维权服务站"></i>
      </a>
      <a rel="nofollow" target="_blank" href="">
        <i class="footer-pic-ico05" title="红盾电子链接标识"></i>
      </a>
      <a rel="nofollow" target="_blank" href="">
        <i class="footer-pic-ico06" title="网络警察报警平台"></i>
      </a>
      <a rel="nofollow" target="_blank" href="">
        <i class="footer-pic-ico07" title="公安局网络警察支队"></i>
      </a>
      <a rel="nofollow" target="_blank" href="" id="___szfw_logo___">
        <i class="footer-pic-ico09" title="诚信网站"></i>
      </a>
      <a rel="nofollow" target="_blank" href="">
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
