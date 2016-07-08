<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="css/css.css" type="text/css" rel="stylesheet" />
<link href="css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="images/main/favicon.ico" />
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
    @if(Session::has("info"))
    <script>
     alert("添加分组成功")
    </script>
    @endif
    
     @if(Session::has("update") && session("update")==1)
    <script>
     alert("修改成功")
    </script>
    @elseif(Session::has("update") && session("update")==0)
     <script>
     alert("修改失败")
    </script>
    @endif
    
     @if(Session::has("delete") && session("delete")==1)
    <script>
     alert("删除分组成功")
    </script>
    @elseif(Session::has("delete") && session("delete")==0)
     <script>
     alert("删除分组失败")
    </script>
    @endif
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：分组列表</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         <form method="post" action="">
	         <span>管理员：</span>
	         <input type="text" name="" value="" class="text-word">
	         <input name="" type="button" value="查询" class="text-but">
	         </form>
         </td>
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">新增管理员</a></td>
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">编号</th>
        <th align="center" valign="middle" class="borderright">名称</th>
        <th align="center" valign="middle" class="borderright">权限</th>
        
        <th align="center" valign="middle">操作</th>
      </tr>
      @foreach($groups as $group)
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">{{ $group->id }}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{ $group->title }}</td>
        <td align="center" valign="middle" class="borderright borderbottom">
        @foreach($rules as $key=>$rule)
        @if(in_array($rule->id,explode(",","$group->rules")))
            <input type="checkbox" groupid="{{ $group->id }}" checked name="rule[]" value="{{ $rule->id }}">{{ $rule->title }}
            @else
            <input type="checkbox" groupid="{{ $group->id }}" name="rule[]" value="{{ $rule->id }}">{{ $rule->title }}
        @endif
            @if($key%9==8) <br /> @endif
        @endforeach
        </td>
        <td align="center" valign="middle" class="borderbottom">
            <a href="{{ asset('/admin/group/'.$group->id.'/edit') }}" target="main" onFocus="this.blur()" class="add">编辑</a>
            <span class="gray">&nbsp;|&nbsp;</span>
            <a href="/admin/group/delete/{{$group->id}}" target="main" onFocus="this.blur()" class="add">删除</a>
        </td>
      </tr>
      @endforeach
    </table></td>
    </tr>
  <tr>
    <td align="left" valign="top" class="fenye">11 条数据 1/1 页&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">首页</a>&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">上一页</a>&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">下一页</a>&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">尾页</a></td>
  </tr>
</table>
<script src="{{asset('/js/admin/group_index.js')}}"></script>
</body>
</html>