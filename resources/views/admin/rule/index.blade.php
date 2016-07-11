<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<link href="css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="images/main/favicon.ico" />
<link href="/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
<script src="/uploadify/jquery-1.8.3.min.js"></script>
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
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
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
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：用户管理</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         <form method="post" action="{{asset('/admin/rule/index')}}">
	         <span>管理员：</span>
	         <input type="hidden" name="_token" value="{{csrf_token()}}">
	         <font color="black"><input type="text" name="keyword" value="{{$key}}" class="text-word"></font>
	         <input type="submit" value="查询" class="text-but" style="background:gray;color:#FFF">
	         </form>
         </td>
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"></td>
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">编号</th>
        <th align="center" valign="middle" class="borderright">规则</th>
        <th align="center" valign="middle" class="borderright">名称</th>
        <th align="center" valign="middle" class="borderright">是否启用</th>
        <th align="center" valign="middle">操作</th>
      </tr>
       @foreach($rules as $rule)
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">{{$rule->id}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$rule->name}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$rule->title}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">
           <input type="radio" rule="{{$rule->id}}" name="status/{{$rule->id}}" value="1" @if($rule->status == 1) checked @endif>启用
           <input type="radio" rule="{{$rule->id}}" name="status/{{$rule->id}}" value="0" @if($rule->status == 0) checked @endif>禁用
        </td>
        <td align="center" valign="middle" class="borderbottom">
            <a href="{{url('/admin/rule/'.$rule->id."/edit")}}" target="main" onFocus="this.blur()" class="add">编辑</a>
            <span class="gray">&nbsp;|&nbsp;</span>
            <a href="{{url('/admin/rule/delete/'.$rule->id)}}" target="main" onFocus="this.blur()" class="add">删除</a>
        </td>
      </tr>
     @endforeach
    
    </table> {!!$rules->appends(["keyword"=>$key])->render()!!}</td>
    </tr>
 
</table>
<script src="{{asset('/js/admin/rule_index.js')}}"></script>
</body>
</html>