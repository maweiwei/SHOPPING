@include("home.goods.goods")
<div class="content_tp1">
    @foreach($message as $messages)
    <div class="formwork">
        <div class="formwork_text">
            <font size="4">{{$messages->nickname}}</font>&nbsp;&nbsp;：&nbsp;&nbsp;{{$messages->contents}}
            @if(!empty($message->createTime))
            <font>date("Y-m-d H:i:s",{{$message->createTime}})</font> 
            @endif
        </div>
    </div>
    @endforeach
</div>
</div>
</div>
@include("home.common.foot")