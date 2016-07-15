@include("home.common.head")
<sprict><link rel="stylesheet" type="text/css" href="{{asset('/css/home/goods/decs.css')}}"></sprict>
<div class="c" id="main">
    <div id="goods">
        <div id="goods_top">
            <span><a class="p" href="/">首页&nbsp;></a></span>
            <span><a class="p" href="/hone/category/{{$goods->pid}}/{{$goods->cid}}">{{$goods->cname}}&nbsp;></a></span>
            <span>{{$goods->name}}</span>
        </div>
        <div id="goods_t1">
            <div id="b_t1_left">
                <div><img src="{{$goods->img}}"/></div>

            </div>
            <div id="b_t1_right">
                <div id="b_t1_name">{{$goods->name}}<a href=""><div id="sc">收藏</div></a></div>
                <div id="b_t1_price">&yen;{{$goods->price}}</div>
                <div id="b_t1_zhe"></div>
                @if(!empty($goods->reprice))
                <div id="b_t1_old">&yen;{{$goods->reprice}}</div>
                @endif
                <div class="c" id="b_t1_right2">
                    <div id="b_t1_r_1">折扣</div>
                    <div id="b_t1_r_2">购物满2件即享9折，满3件即享8.8折</div>
                </div>
                <div class="c" id="b_t1_right3">
                    <div id="yunfei">运费:</div>
                    <div id="free">免运费</div>
                    <div id="free288">(订单满288免运费)</div>
                </div>
                <div class="c" id="b_t1_right4">
                    <div id="count">数量:</div>
                    <div id="num">
                        <form method="post" action="/Home/goods/incar">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="gid" value="{{$goods->gid}}">
                            <input type="hidden" name="price" value="{{$goods->price}}">
                            <input type="number" name="number" value="1" min="1">

                            </div><br/><br/>
                            <input type="image" src="/images/home/tijiao.png"> <font color="red">{{session("info")}}</font>
                        </form>
                    </div>
                </div>

            </div>
            @if(Session::has("info"))
            <script>
                setInterval("test()", 2000);
                function test() {
                    location.reload();
                }
            </script>
            @endif
            <div class="c" id="b_t_left2">
                <span><img src="{{$goods->img}}" width="60px" height="78px"></span>
                <span><img src="" width="60px" height="78px"></span>
                <span><img src="" width="60px" height="78px"></span>
                <span><img src="" width="60px" height="78px"></span>
                <span><img src="" width="60px" height="78px"></span>
            </div>
            <div class="all-name" id="js">
                <ul>
                    <li><a href="/home/category/goods/{{$goods->gid}}#js"><span>商品介绍</span></a></li>
                    <li><a href="/home/category/good/{{$goods->gid}}#js"><span>商品评价&nbsp;(<font color="red">{{$num}}</font>)</span></a>
                        <div>11111111</div>
                    </li>
                </ul>
            </div>
