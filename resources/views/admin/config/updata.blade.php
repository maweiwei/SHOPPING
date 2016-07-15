<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>主要内容区</title>
        <script src="/uploadify/jquery-1.8.3.min.js"></script>
        <script src="/uploadify/jquery.uploadify.min.js"></script>
        <link type="text/css" rel="stylesheet" href="/uploadify/uploadify.css">
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
            #search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF}
            #search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
            #search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
            #search form input.text-but{height:24px; line-height:24px; width:55px; background:url(img../../public/admin//main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
            #search a.add{ background:url(img../../public/admin//main/add.jpg) no-repeat 0px 6px; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF}
            #search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
            #main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
            #main-tab th{ font-size:12px; background:url(img../../public/admin//main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
            #main-tab td{ font-size:12px; line-height:40px;}
            #main-tab td a{ font-size:12px; color:#548fc9;}
            #main-tab td a:hover{color:#565656; text-decoration:underline;}
            .borderright{ border-right:1px solid #ebebeb}
            .borderbottom{ border-bottom:1px solid #ebebeb}
            .bggray{ background:#f9f9f9; font-size:14px; font-weight:bold; padding:10px 10px 10px 0; width:120px;}
            .main-for{ padding:10px;}
            .main-for input.text-word{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; padding:0 10px;}
            .main-for select{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666;}
            .main-for input.text-but{ width:100px; height:40px; line-height:30px; border: 1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
            #addinfo text{ font-size:14px; font-weight:bold; background:url(img../../public/admin//main/addinfoblack.jpg) no-repeat 0 1px; padding:0px 0 0px 20px; line-height:45px;}
        </style>
    </head>
    <body>
        <!--main_top-->
        <table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
            <tr>
                <td width="99%" align="left" valign="top">您的位置：网站配置&nbsp;&nbsp;>&nbsp;&nbsp;修改网站配置</td>
            </tr>
            <tr>
                <td align="left" valign="top" id="addinfo"><text target="mainFrame" onFocus="this.blur()" class="add">修改网站配置</text></td>
            </tr>
            <tr>
                <td align="left" valign="top">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
                        <tr>
                            <td align="right" valign="middle" class="borderright borderbottom bggray">logo：</td>
                            <td align="left" valign="middle" class="borderright borderbottom main-for" onMouseOut="this.style.backgroundColor = '#ffffff'" onMouseOver="this.style.backgroundColor = '#edf5ff'">
                                <img src="{{$config->logo}}" id="im" width="266" height="78"/>
                                <form name="fm">
                                    <input type="hidden" name="uuid" value="{{$config->id }}" />
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <input type="file" name="avartar" id="avartar" />
                                </form>
                                <script src="{{ asset('/js/admin/logo.js') }}"></script>
                            </td>
                        </tr>
                        <form method="post" action="{{url('/admin/config/update')}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <tr>
                                <td align="right" valign="middle" class="borderright borderbottom bggray">名称：</td>
                                <td align="left" valign="middle" class="borderright borderbottom main-for">
                                    <input type="text" name="title" value="{{$config->title}}"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" valign="middle" class="borderright borderbottom bggray">关键字：</td>
                                <td align="left" valign="middle" class="borderright borderbottom main-for" onMouseOut="this.style.backgroundColor = '#ffffff'" onMouseOver="this.style.backgroundColor = '#edf5ff'">
                                    <input type="text" name="keyword" value="{{$config->keyword}}"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" valign="middle" class="borderright borderbottom bggray">版权：</td>
                                <td align="left" valign="middle" class="borderright borderbottom main-for" onMouseOut="this.style.backgroundColor = '#ffffff'" onMouseOver="this.style.backgroundColor = '#edf5ff'">
                                    <input type="text" name="copy" value="{{$config->copy}}"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" valign="middle" class="borderright borderbottom bggray">开启/关闭：</td>
                                <td align="left" valign="middle" class="borderright borderbottom main-for" onMouseOut="this.style.backgroundColor = '#ffffff'" onMouseOver="this.style.backgroundColor = '#edf5ff'">
                                    <input type="radio" name="status" value="1" @if($config->status==1) checked @endif/>开启
                                           <input type="radio" name="status" value="2" @if($config->status==2) checked @endif/>关闭
                                </td>
                            </tr>
                            <tr onMouseOut="this.style.backgroundColor = '#ffffff'" onMouseOver="this.style.backgroundColor = '#edf5ff'">
                                <td align="right" valign="middle" class="borderright borderbottom bggray">&nbsp;</td>
                                <td align="left" valign="middle" class="borderright borderbottom main-for">
                                    <input type="submit" value="修改" class="text-but">
                                </td>
                            </tr>
                        </form>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>