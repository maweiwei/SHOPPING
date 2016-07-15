<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>管理页面</title>

<script src="{{ asset("/js/admin/prototype.lite.js") }}" type="text/javascript"></script>
<script src="{{ asset("/js/admin/moo.fx.js") }}" type="text/javascript"></script>
<script src="{{ asset("/js/admin/moo.fx.pack.js") }}" type="text/javascript"></script>
<link href="/css/admin/left.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" height="280" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEF2FB">
  <tr>
    <td width="182" valign="top"><div id="container">
      <h1 class="type"><a href="javascript:void(0)">网站常规管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="{{ asset("/images/admin/menu_topline.gif") }}" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="{{ url("/right") }}" target="main">管理员信息</a></li>
          <li><a href="{{ url("/user_list") }}" target="main">管理员列表</a></li>
          <li><a href="{{ url("/admin/user/add") }}" target="main">添加管理员</a></li>
          
          <li><b><a href="{{ url("/admin/group") }}" target="main">分组列表</a></b></li>
          <li><a href="{{ asset('/admin/group/create') }}" target="main"><b>添加分组</b></a></li>
          <li><a href="{{ url("/admin/rule") }}" target="main">所有权限</a></li>
          <li><a href="{{url("/admin/rule/create")}}" target="main">添加权限</a></li>

          <li><a href="" target="main">增加链接</a></li>
          <li><a href="" target="main">管理链接</a></li>
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">前台用户管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="{{ asset("/images/admin/menu_topline.gif") }}" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="{{url('/Home/user')}}" target="main">用户列表</a></li>
          <li><a href="{{url("/Home/user/message")}}" target="main">商品评价</a></li>
          <li><a href="" target="main">资讯分类</a></li>
          <li><a href="" target="main">地区设置</a></li>
          <li><a target="main" href="">市场联盟</a></li>
          <li><a href="" target="main">商家类型</a></li>
          <li><a href="" target="main">商家星级</a></li>
          <li><a href="" target="main">商品分类</a></li>
          <li><a href="" target="main">商品类型</a></li>
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">商品管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="{{ asset("/images/admin/menu_topline.gif") }}" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
		  <li><a href="/admin/goods" target="main">商品列表</a></li>
		  <li><a href="/admin/goods/create" target="main">添加商品</a></li>
	  <li><a href="{{ url("/Admin/category") }}" target="main">所有分类</a></li>
          <li><a href="/Admin/category/create" target="main">添加根类</a></li>
        </ul>
      </div>
      
       <h1 class="type"><a href="javascript:void(0)">订单管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="{{ asset("/images/admin/menu_topline.gif") }}" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
		  <li><a href="/admin/goods" target="main">查看购物车</a></li>
		  <li><a href="/Home/order" target="main">查看订单</a></li>
	  <li><a href="{{ url("/Admin/category") }}" target="main">所有分类</a></li>
          <li><a href="/Admin/category/create" target="main">添加根类</a></li>
        </ul>
      </div>
      
      <h1 class="type"><a href="javascript:void(0)">权限管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <ul class="MM">
          <li><a href="{{ url("/admin/group") }}" target="main">分组列表</a></li>
          <li><a href="{{ asset('/admin/group/create') }}" target="main">添加分组</a></li>
          <li><a href="{{ url("/admin/rule") }}" target="main">所有权限</a></li>
          <li><a href="{{url("/admin/rule/create")}}" target="main">添加权限</a></li>
          </ul>
        </table>
      </div>
    </div>
        <h1 class="type"><a href="javascript:void(0)">其它参数管理</a></h1>
      <div class="content">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="{{ asset("/images/admin/menu_topline.gif") }}" width="182" height="5" /></td>
            </tr>
          </table>
        <ul class="MM">
            <li><a href="" target="main">管理设置</a></li>
          <li><a href="" target="main">主机状态</a></li>
          <li><a href="" target="main">攻击状态</a></li>
          <li><a href="" target="main">登陆记录</a></li>
          <li><a href="" target="main">运行状态</a></li>
        </ul>
      </div>
      </div>
        <script type="text/javascript">
		var contents = document.getElementsByClassName('content');
		var toggles = document.getElementsByClassName('type');
	
		var myAccordion = new fx.Accordion(
			toggles, contents, {opacity: true, duration: 400}
		);
		myAccordion.showThisHideOpen(contents[0]);
	</script>
        </td>
  </tr>
</table>
</body>
</html>
