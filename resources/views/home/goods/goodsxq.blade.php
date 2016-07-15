@include("home.goods.goods")
<div class="content_tp1">
    <div class="formwork">
        <div class="formwork_text">{{$goods->content}}</div>
    </div>
    <div class="formwork">
        <div class="formwork_img">
            <img class="" style="" src="{{$goods->img}}"/>
        </div>
    </div>
</div>
</div>
</div>
@include("home.common.foot")