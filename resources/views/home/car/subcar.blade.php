<!DOCTYPE html>
<html lang="zh" class="device-pc">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>唯品会-订单信息</title>
    <link href="{{ url("/css/home/car/nullcar1.css") }}" type="text/css" rel="stylesheet">
    <link href="{{ url("/css/home/car/subcar2.css") }}" type="text/css" rel="stylesheet">
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
<div style="width:100;height:100">
    <center><font size="7" color="#f3168a">确认订单信息</font></center>
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
</div>
		
        <div class="g-bd">
        <div class="g-row J_ue_position_container">
            
    <div class="m-ad  page-top-ad  f-hide  J_ad_ADADSPA7YO">
        <p class="ad-text  J_ad_text">-</p>
    </div>
	    
<div class="m-box address-box  z-address-box-initialize-success z-address-box-old-customers z-address-lt-3" id="J_address_module">
    <div class="box-hd">
        <h2 class="box-hd-title">收货信息</h2>
    </div>
    <div class="box-bd">
                <div class="address-box-cnt address-box-cnt-initialize-success">
                        <div class="address-list-wrapper J_address_list_wrapper">
                                <div class="m-address">
                    <ul class="m-inline-block address-list J_address_list">
			@foreach($adress as $adr)
			
			<li class="inline-block-item address-item J_address_item_container J_address_mod_container z-address-item-default z-address-item-current" data-id="127547373" data-curr="">
        <div mars_sead="address1_radio" class="m-member-info address-inner J_address_item" data-hover="address-inner-hover">
            <div class="member-info-item member-info-title">
                <span class="vipFont"></span>
                <p class="member-text">
                    <span class="member-name" title="">{{ $adr->uname }}</span>
                </p>
            </div>
            <div class="member-info-item member-info-phone">
                <span class="vipFont"></span>
                <p class="member-text">
                    
                        <span class="member-mobile">{{ $adr->phone }}</span> 
                </p>
            </div>
          <div class="member-info-item member-info-local" title="北京市.北京市.朝阳区.三里屯街道 目的">
	                          <span class="vipFont  glyphicon-address-local"></span>
				  <address class="member-text">{{ $adr->adress }}</address>
	  </div>
            @if($adr->status==1) <span class="default-address-text"><font color="blue">默认地址</font></span> @endif
            <span class="u-icon icon-corner-tick"></span>
            <div class="member-info-actions">
                <a class="ui-btn-mini  ui-btn-default J_address_modify  J_fake_a" href="" role="button" mars_sead="address1_edit_btn">修改</a>
		<a class="ui-btn-mini  ui-btn-default J_address_modify  J_fake_a" href="" role="button" mars_sead="address1_edit_btn">删除</a>
		<a class="ui-btn-mini  ui-btn-default J_address_modify  J_fake_a" href="" role="button" mars_sead="address1_edit_btn">设为默认</a>
            </div>
        </div><!-- / .m-member-info -->
                <div class="address-item-loading">
            <span class="ii-loading-pink-32x32"></span>
        </div>
    </li>
   @endforeach
    
    <li class="inline-block-item address-item address-item-add J_address_item_container J_address_add_container J_address_mod_container" data-hover="address-item-add-hover" data-touch="z-touch">
        <div class="address-inner">
            <a class="add-address J_address_add_btn J_fake_a" href="###" mars_sead="address_new_radio">
                <span class="vipFont  glyphicon-address-add"></span>
                <div class="add-address-text">添加地址</div>
            </a>
        </div>
    </li></ul>                          
                </div>
			    
			    
			    
            </div>

                        <div class="address-form-wrapper J_address_form_wrapper"></div>
        </div><!-- / .address-box-cnt-initialize-success -->
    </div><!-- / .box-bd -->
  
    
    
</div><!-- / .m-box -->

<div class="m-box order-info-box z-order-info-box-initialize-success" id="J_order_info_module">
            <div class="box-hd">
            <a class="f-right return-cart-link" href="{{ url("/Home/car") }}" mars_sead="checkout_backcart1_link"><span class="u-open-arrow">&lt;&lt;</span>返回购物袋修改商品</a>
            <h2 class="box-hd-title">订单商品信息</h2>
        </div>
    
    
        <div class="box-bd">
                        <div class="order-info-wrapper">
                                        <table class="u-table order-info-table vip-order-info-table" id="J_info_table">
                    <thead>
                        <tr>
                            <th colspan="2" class="product-item">
                                <div class="product-item-inner">
                                    <div class="f-left">
                                        <em>唯品会</em>发货订单
                                    </div>
                                </div>
                                                                                                    <div class="c-time-effective J_delivery_time_container is-time-effective-result-in" id="J_delivery_time_container_0">
                                        <span class="ii-loading-pink-16x16  time-effective-loader"></span>
                                        <p title="预计在 07月15日（周五） 前送达" class="time-effective-explain J_delivery_time_explain">预计在 07月15日（周五） 前送达</p>
                                    </div>
                                                            </th>
                            <th class="price-item">单价</th>
                            <th class="quantity-item">数量</th>
                        </tr>
                    </thead>
		    @foreach($car as $tmp)
                    <tbody>
            
<!--商品展示页-->			

                                                        <tr class="product-row table-last-row">
                                <td class="product-item">
                                                                            <div class="product-pic-trigger" data-toggle="tooltip" data-hover="product-pic-trigger-hover" data-touch="z-touch">
                                                                                        <div class="product-pic-small">
                                                <a href="{{ url("/home/category/goods/{$tmp->gid}") }}"><img src="{{ $tmp->img }}"  height="48" width="37"></a>
                                            </div>
                                            <div class="ui-tooltips  ui-tooltips-left-top-arrow tooltips-default product-pic-tooltips">
						
						
    <div class="ui-tooltips-content">
                    <img src="{{ $tmp->img }}"  height="234" width="184">            </div>
</div>
                                        </div>
                                    
                                    <p class="product-item-text" title="">{{ $tmp->name }}</p>
                                                                            <p class="product-item-notice"></p>

                                    
                                </td>

                                <td class="size-item ">
                                    尺码：{{ $tmp->size }}                                </td>
                                <td class="price-item">
                                    <span class="m-price J_goods_285395264">
                                        <span class="u-yen">¥</span><span class="u-price">{{ $tmp->price }}</span>
                                    </span>
                                </td>
                                <td class="quantity-item">
                                    {{ $tmp->number }}                                </td>
                            </tr>

                                                </tbody>
			@endforeach
                    <tfoot>
                        <tr>
                            <td colspan="4">
                                <div class="inner">
                                    
                                    <div class=" shipping-costs J_sum_items" data-toggle="tooltip" data-hover="shipping-costs-hover" data-touch="z-touch">
                                        <span class="tooltips-trigger-text">
                                            运费：                                                <span class="free-shipping-label">免运费</span>
                                                                                    </span>

                                                                            </div>
                                    <!-- / .shipping-costs -->
                                    <span class="discount J_sum_items">
                                        已享受优惠：
                                        <span class="m-price">
                                            -<span class="u-yen">¥</span><span class="u-price J_fav_0">334</span>
                                        </span>
                                    </span>
                                    <span class="subtotal J_sum_items">
                                        本订单金额：
                                        <span class="m-price">
                                            <span class="u-yen">¥</span><span class="u-price J_amount_0">1893</span>
                                        </span>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                </div>
                                <div class="m-checkout-review">
            <div class="m-inline-block checkout-review-inner">
                <div class="inline-block-item review-others-wrapper">
                    <div class="review-others">
                        
                        
                        <div class="m-inline-block review-item review-address-item" data-hover="review-item-hover" data-touch="z-touch">
                            <h3 class="inline-block-item review-item-title">收货信息：</h3>
                            <div class="inline-block-item review-item-cnt J_transport_info">
                               <div>
				   @foreach($adress as $adr)
					@if($adr->status == 1)
				   <span class="review-item-cnt-text" title="">{{ $adr->uname }},{{ $adr->phone }},{{ $adr->adress }}</span>
                                    <span class="result-actions address-modify-tips"><a href="###" class="J_fake_a J_address_edit_link" data-id="127547373" mars_sead="address_modify2_btn">修改</a></span>
					@endif
				    @endforeach
                                </div>
                               <div class="J_takeTimeInfo">
                                    <span class="review-item-cnt-text  J_takeTimeTxt">周一至周五</span>
                                    <span class="result-actions time-modify-tips">
                                        <a href="###" class="J_fake_a J_deliveryTime_edit_link" data-id="127547373" mars_sead="">修改</a>
                                    </span>
                               </div>
                            </div>
                        </div>
                        <div class="m-inline-block review-item review-payment-item" data-hover="review-item-hover" data-touch="z-touch">
                            <h3 class="inline-block-item review-item-title">支付方式：</h3>
                            <div class="inline-block-item review-item-cnt J_paymen_info"><div>
                                <span class="review-item-cnt-text">在线支付</span>
                                
                                    <span class="result-actions">
                                        <a href="###" class="J_fake_a J_pay_edit_link" data-id="" mars_sead="payment_modify2_btn">修改</a>
                                    </span>
                                
                            </div></div>
                        </div>
                        <div class="m-inline-block review-item review-other-item">
                            <h3 class="inline-block-item review-item-title">其他信息：</h3>
                            <div class="inline-block-item review-item-cnt">
                                <div class="m-invoice   z-invoice-initialize-success" id="J_invoice_module">
    
    <div class="invoice-hd">
        <div class="invoice-hd-checkbox-wrapper  J_invoice_checkbox">
            <div class="ui-tooltips  ui-tooltips-bottom-left-arrow ">
    <div class="ui-tooltips-arrow">
        <span class="arrow arrow-out">◆</span>
        <span class="arrow">◆</span>
    </div>
</div>  
        </div>
    </div>

    <div class="invoice-hd invoice-hd-initialize-success">
        <div class="invoice-hd-checkbox-wrapper">
            <span class="ui-checkbox">
                <input simulate="done" id="J_use_invoice" class="ui-checkbox-normal" mars_sead="invoice_cbox" type="checkbox">
                <label for="J_use_invoice" class="ui-checkbox-simulation"></label>
            </span>
            <label for="J_use_invoice" class="ui-label"><input type="radio" value="" name="fu" checked/>快捷支付<input type="radio" value="" name="fu"/>货到付款</label>
        </div>

        <div class="c-tooltips-trigger  invoice-guide-tooltips-trigger" data-hover="tooltips-trigger-bottom-hover" data-touch="z-touch" data-toggle="tooltip">
            <span class="vipFont  if-query  tooltips-trigger-icon"></span>
            <div class="ui-tooltips  ui-tooltips-bottom-left-arrow invoice-guide-tooltips">
    <div class="ui-tooltips-arrow">
        <span class="arrow arrow-out">◆</span>
        <span class="arrow">◆</span>
    </div>
</div>
        </div>
        
    </div><!-- / .invoice-hd -->
</div><!-- / .m-invoice -->
                            </div>
                        </div>
                    </div><!-- / .review-others -->
                </div><!-- / .inline-block-item -->
		
<!--金额-->
                <div class="inline-block-item review-price-wrapper">
                    <div class="review-price">
                        <ul class="review-price-list">
                            <li class="review-price-item J_sum_items">
                                <span class="m-price">
                                    <span class="u-yen">¥</span><span class="u-price J_goods_amount">2227</span>
                                </span>
                                <h4 class="review-price-item-title">商品金额：</h4>
                            </li>
                            <li class="review-price-item J_sum_items">
                                <span class="m-price">
                                    <span class="u-yen">¥</span><span class="u-price J_shipping_amount">0</span>
                                </span>
                                <h4 class="review-price-item-title">运费：</h4>
                            </li>
                            <li class="review-price-item J_sum_items">
                                <span class="m-price">
                                    -<span class="u-yen">¥</span><span class="u-price J_active_amount">334</span>
                                </span>
                                <h4 class="review-price-item-title">活动优惠：</h4>
                            </li>   
                        </ul>
                        <div class="review-total-price J_sum_items">
                            <strong class="m-price">
                                <span class="u-yen">¥</span><span class="u-price J_pay_amount">1893</span>
                            </strong>

                                                        <h4 class="review-total-price-title">待支付：</h4>
                                                    </div>
                                                <div class="review-price-actions J_can_not_order_tips" id="J_can_not_order_tips">
                                <a href="/Home/endcar" role="button" class="ui-btn-large ui-btn-primary ui-btn-loading J_order_submit_btn">
                                    <span class="ui-btn-loading-before" mars_sead="checkout_submit_btn">提交订单</span>
                                    <span class="ui-btn-loading-after"><i class="ii-loading-gray-32x32"></i></span>
                                </a>
                            </form>
                                </div><!-- / .review-price-actions -->
                    </div><!-- / .review-price -->
                    <div id="J_order_agreement_wrapper">
                                            </div>
                </div><!-- / .inline-block-item -->
            </div><!-- / .checkout-review-inner -->
        </div><!-- / .m-checkout-review -->
    </div><!-- / .box-bd -->
</div><!-- / .order-info-box -->

<!--底部图片-->
<div class="c-promises">
    <div class="promises-item  authentic-promises-item">
        <div class="promises-pic"></div>
        <h3 class="promises-title">100% 正品保证</h3>
        <div class="promises-explain">
            <p>唯品会所售品牌均经过授权；中国太平洋保险为您购买的每一件商品进行承保。</p>
        </div>
    </div><!--
 --><div class="promises-item  return-promises-item">
        <div class="promises-pic"></div>
        <h3 class="promises-title">7 天无理由退货</h3>
        <div class="promises-explain">
            <p>无论何种原因，签收后 7 天内都可无理由退货，完善售后，退货无忧。</p>
        </div>
    </div><!--
 --><div class="promises-item  courier-charge-promises-item">
        <div class="promises-pic"></div>
        <h3 class="promises-title">退货返运费</h3>
        <div class="promises-explain">
            <p>善变无罪！退货成功后，您将获得 1000 个唯品币（价值 10 元）作为回寄运费补贴。</p>
        </div>
    </div>
</div>

        </div><!-- / .g-row -->
    </div><!-- / .g-bd -->

        <div class="g-ft">
        <div id="J_vip_common_footer"><!-- 公用尾部模板 common域1-->

<!--底部-->
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
<!-- 防刷商品弹窗 -->
    </div>
</body>
</html>
