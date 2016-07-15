<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>

<script src="/uploadify/jquery-1.8.3.min.js"></script>
<script src="/uploadify/jquery.uploadify.min.js"></script>
<script type="text/css" rel="stylesheet" href="/uploadify/uploadify.css"></script>

 <meta name="csrf-token" content="{{ csrf_token() }}" />
        <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        </script>
<style>
body{overflow-x:hidden; background:#EDF0F3; padding:15px 0px 10px 5px;}
#main{ font-size:12px;}
#main span.time{ font-size:14px; color:#528dc5; width:100%; padding-bottom:10px; float:left}
#main div.top{ width:100%; padding:0 0 0 15px; line-height:35px; float:left}
#main div.sec{ width:100%; padding:0 0 0 15px; line-height:35px; float:left}
.left{ float:left}
#main div a{ float:left}
#main span.num{  font-size:30px; color:#538ec6; font-family:"Georgia","Tahoma","Arial";}
.left{ float:left}
div.main-tit{ font-size:14px; font-weight:bold; color:#4e4e4e; width:100%; padding:30px 0 0 20px; float:left}
div.main-con{ width:100%; float:left; padding:10px 0 0 20px; line-height:36px;}
div.main-corpy{ font-size:14px; font-weight:bold; color:#4e4e4e; width:100%; padding:30px 0 0 20px; float:left}
div.main-order{ line-height:30px; padding:10px 0 0 0;}
ul {list-style: none;}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="main">
  <tr>
    <td colspan="2" align="left" valign="top">
    <span class="time"><strong>上午好！{{session("userData")->uname}}</strong><u>[超级管理员]</u></span>
    <div class="top"><span class="left">您上次的登灵时间：2012-05-03  12:00   登录IP：127.0.0.1 &nbsp;&nbsp;&nbsp;&nbsp;如非您本人操作，请及时</span><a href="index.html" target="mainFrame" onFocus="this.blur()">更改密码</a></div>
    <div class="sec">这是您第<span class="num">80</span>次,登录！</div>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" width="5%">
    <div class="main-tit">用户头像</div>
    <div class="main-con">
      <form name="fm">
          <input type="hidden" name="uid" value="{{ session("userData")->uid }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <img id="img" src="{{session('userData')->avartar}}" width="100"><br/>
         <input id="avartar" type="file" name="avartar"></br>
     </form>
管理员个数：<font color="#538ec6"><strong>6</strong></font> 人<br/>

    </div>
    </td>
    <td align="left" valign="top" width="49">
    <div class="main-tit">用户信息</div>
    <div class="main-con">
        <!--用户详情-->
        <ul style="color:gray;">
	    <form>
            <li>用户名：<input type="text" name="uname" disabled value="{{session('userData')->uname}}"/></li>
            <li>昵&nbsp&nbsp&nbsp称：<input type="text" name="nickname" disabled value="{{session('userData')->nickname}}"/></li>
	    <li>性&nbsp&nbsp&nbsp别：<input type="text" name="sex" disabled value="{{session('userData')->sex}}"/></li>
	    <a href=""><input type="button" name="btn" value="修改" style="border:none; background:gray;border-radius:5px;"></a>
	    </form>
        </ul>

<!--<img src="1.jpg" width="200">-->
    </div>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top">
    <div class="main-corpy">系统提示</div>
    <div class="main-order">
1=>如您在使用过程有发现出错请及时与我们取得联系；为保证您得到我们的后续服务，强烈建议您购买我们的正版系统或向我们定制系统！<br/>
2=>强烈建议您将IE7以上版本或其他的浏览器</div>
    </td>
  </tr>
</table>
<script src="/js/admin/index.js"></script>
</body>
</html>