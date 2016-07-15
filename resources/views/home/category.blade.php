@include("home.common.head")
<sprict><link href="/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" /></sprict>
<div id="body">
    @if(isset($cate))
    <div id="main_top_center">
        <div id="d">分类：</div>
        <div id="all_list">
            <ul>
                <li><a id="all" href="/hone/category/{{$cate[0]->pid}}"><span>&nbsp;全部&nbsp;</span></a></li>
                @foreach($cate as $tmps)
                <li><a href="/hone/category/{{$tmps->pid}}/{{$tmps->cid}}">{{$tmps->cname}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <div id="main_body_top">
        @foreach($goods as $good)
        <div id="main_body_content1" class="main_body_content">
            <a href="/home/category/goods/{{$good->gid}}">
                <div><img src="{{$good->img}}" width="225" height="300"/></div>
                <div size="20">{{$good->name}}</div>
                <div><b class="pink">&yen;{{$good->price}}</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<del>@if(!empty($good->reprice)) &yen;{{$good->reprice}} @endif</del></span></div>
            </a>
        </div>
        @endforeach
    </div>
    <div id="main_top_foot">
        <div id="mtf_left1"><span class="rspan">{{$count}}</span>件商品</div>
        <!--<div id="mtf_left2"></div>-->
        <div id="mtf_left3"></div>
        <div id="mtf-right4">{!!$goods->appends(["keyword"=>$key])->render()!!}</div>
        <div id="mtf-line"></div>
        <div id="mtf-right1"></div>
    </div>
</div>	
@include("home.common.foot")            