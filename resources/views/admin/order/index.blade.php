<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<link href="css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="images/main/favicon.ico" />
<script src="/uploadify/jquery-1.8.3.min.js"></script>
<link href="/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
 <meta name="csrf-token" content="{{ csrf_token() }}" />
        <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        </script>
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF; float:left}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; color:black; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(images/main/add.jpg) no-repeat -3px 7px #548fc9; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF; float:right}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye li{ padding:10px 0 0 0; text-align:right;}
#th{text-align:center;}
.bggray{ background:#f9f9f9}
</style>
</head>
<body>
<!--main_top-->
<!--<font size="5" color="red">{{ session("info") }}</font>-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top"><font size="5">您的位置：商品列表</font></td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle" bgcolor="#3C5E7C">
	         <form method="post" action="{{asset('/Home/order/index')}}">
	         <span>订单：</span>
	         <input type="hidden" name="_token" value="{{csrf_token()}}">
                 <input type="text" placeholder="输入买家、商品名、分类名查询" name="keyword" value="{{$key}}" class="text-word">
	         <input type="submit" value="查询" class="text-but" style="background:gray;color:#FFF">
	         </form>
         </td>
	 <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;background:#3C5E7C"></td>
  		</tr>
	</table>
    </td>
  </tr>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
  <tr>
    <td align="left" valign="top">
      <tr id="th" bgcolor="gray">
<!--        <th align="center" valign="middle" class="borderright"><center>序号</center></th>-->
        <th align="center" valign="middle" class="borderright"><center>ID</center></th>
        <th align="center" valign="middle" class="borderright"><center>买家</center></th>
        <th align="center" valign="middle" class="borderright"><center>商品名</center></th>
        <th align="center" valign="middle" class="borderright"><center>分类</center></th>
        <th align="center" valign="middle" class="borderright"><center>图片</center></th>
        <th align="center" valign="middle" class="borderright"><center>价格</center></th>
        <th align="center" valign="middle" class="borderright"><center>收货地址</center></th>
        <th align="center" valign="middle" class="borderright"><center>备注</center></th>
        <th align="center" valign="middle" class="borderright"><center>购买时间</center></th>
        <th align="center" valign="middle" class="borderright"><center>是否发货</center></th>
        <th align="center" valign="middle" class="borderright"><center>是否收货</center></th>
        <th align="center" valign="middle"><center>操作</center></th>
      </tr>
     </td>
    </tr>
    @foreach($orders as $order)
    <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">{{$order->oid}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$order->uname}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$order->name}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$order->cname}}</td>
        <td align="center" valign="middle" class="borderright borderbottom"><img src="{{$order->img}}" width="50" height="50"><br/></td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$order->price}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$order->addr}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$order->note}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$order->odate}}</td>
        @if($order->send==0)
        <td align="center" valign="middle" class="borderright borderbottom"><font color="red"><b>未发货</b></font></td>
        @else
        <td align="center" valign="middle" class="borderright borderbottom"><font color="gray">已发货</font></td>
        @endif
        @if($order->send==2)
        <td align="center" valign="middle" class="borderright borderbottom">已确认</td>
        @else
        <td align="center" valign="middle" class="borderright borderbottom"><b>未确认</b></td>
        @endif
        <td align="center" valign="middle" class="borderbottom">
<!--            <a href="/admin/user/add" target="_self" onFocus="this.blur()" class="add">添加</a><span class="gray">&nbsp;|&nbsp;</span>-->
            @if($order->send==0)
           <a href="/Home/order/{{$order->oid}}/edit" target="main" onFocus="this.blur()" class="add"><font color="red"><b>发货</b></font></a><span class="gray">&nbsp;|&nbsp;</span>
            @else
            <a href="#" target="main" onFocus="this.blur()" class="add"><font color="gray">已发货</font></a><span class="gray">&nbsp;|&nbsp;</span>
            @endif
            
        </td>
    </tr>
   @endforeach
    </table>
 <!--<td am/a>&nbsp;&nbsonFocus="this.blur()">下一页</a>&nbsp;&nbs-->
  <td></td>
   <td align="right" valign="top" class="fenye">{!!$orders->appends(['keyword'=>$key])->render()!!}</td>
  </tr>
</table>
</body>
</html>