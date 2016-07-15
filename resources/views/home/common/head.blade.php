<?php
    $link=mysqli_connect("192.168.142.56","lxf","111111") or die("数据库连接失败！");
	mysqli_select_db($link,"lamp142");
	mysqli_set_charset($link,"utf8");
	$sql="select * from config where id=1";
	$res=mysqli_query($link,$sql);
	if($res && mysqli_num_rows($res)>0){
            $rowt=mysqli_fetch_assoc($res);
	}
?>
<!DOCTYPE HTML>
<html>

    <head>
        <title><?php echo $rowt['title']; ?></title>
        <meta name="keyword" content="<?php echo $rowt['keyword']; ?>"/>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="{{asset('/css/home/index/wph.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/home/index/list.css')}}">
        
    </head>
    <body>
        <!-- head top -->
        <div id="head">
            <div id="head_center">
                <div id="h_c_content">
                    <div id="contentr">
                        <ul>
                            @if(Session::has('homeUser'))
                            <li><a href="">时尚会</a></li>
                            <li><a href="">客户服务</a></li>
                            <li><a>|</a></li>
                            <li><a href="{{url('/Home/indent')}}">我的订单</a></li>
                            <li><a href="{{url('/Home/user/personal')}}">个人中心</a></li>
                            @else
                            <li><a href="">客户服务</a></li>
                            <li><a href="">时尚会</a></li>
                            <li><a href="{{url('/Home/login')}}">登录</a></li>
                            <li><a>|</a></li>
                            <li><a href="{{url('/Home/create')}}">注册</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="c"></div>
            <div id="head_bottom">
                <span id="h_b_left">
                    <img src="<?php echo $rowt['logo']; ?>"   width="266" height="78"  style="margin-top:3px;"/>
                </span>
                <div id="h_b_right">
                    <img src="{{asset('/images/home/index/5.png')}}"/>
                    <img src="{{asset('/images/home/index/6.png')}}"/>
                    <img src="{{asset('/images/home/index/7.png')}}"/>
                    <a id="num" href="/Home/car">
                        <span id="shopbag">
                            <div id="bag"></div>
                            <div id="shop">购物袋</div>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="c"></div>
        <!-- shopbody  -->
        <!-- body head -->
        <div id="body_head">
            <div class="head_left">
                <ul>
                    <li><a id="first" href="/">首页</a></li>
                    @foreach($category as $tmp)
                    <li><a href="/hone/category/{{$tmp->cid}}">{{$tmp->cname}}</a></li>
                    @endforeach
                </ul>
                <div id="head_right">
                    <form method="post" action="{{url('/home/category')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="text" name="keyword" value="{{$key}}" class="text-word">
                        <input type="submit" value="查询" class="text-but">
                    </form>
                </div>
            </div>
        </div>