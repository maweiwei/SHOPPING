<html>
	<head>
		<meta charset="utf-8">
		<title>个人信息页</title>
		
                
                <script src="{{asset('/uploadify/jquery-1.8.3.min.js')}}"></script>
                <script src="{{asset('/uploadify/jquery.uploadify.min.js')}}"></script>
                <link type="text/css" rel="stylesheet" href="{{asset('/uploadify/uploadify.css')}}">
                <link rel="stylesheet" type="text/css"href="{{asset('/css/home/perfect/gerenxinxi.css')}}">
	</head>
	<body>
		<span class="gerenxinxi_left">
			<span class="gerenxinxi_left_one">
				
				
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br/>
				
				
			</span>	
			<hr class="hr"/>
			<span>
				<table>
					<tr>
						<th><a href=>我的订单</a></th>
					</tr>
					<tr>
						<td><a href=>全部订单</a></td>
					</tr>
					<tr>
						<td><a href=>待付款</a></td>
					</tr>
					<tr>
						<td><a href=>待收货</a></td>
					</tr>
					<tr>
						<td><a href=>待评价</a></td>
					</tr>
					<tr>
						<td><a href=>退货退款</a></td>
					</tr>	
				</table>
			</span>
			<hr class="hr"/>
			<span>
				<table>
					<tr>
						<th><a href=>我的钱包</a></th>
					</tr>
				</table>
			</span>
			<hr class="hr"/>
			<span>
				<table>
					<tr>
						<th><a href=>我的理财</a></th>
					</tr>
				</table>
			</span>
			<hr class="hr"/>
			<span>
				<table>
					<tr>
						<th><a href=>我的特权</a></th>
					</tr>
					<tr>
						<td><a href=>钻石会员</a></td>
					</tr>
					<tr>
						<td><a href=>我的蘑豆</a></td>
					</tr>
					<tr>
						<td><a href=>现金卷</a></td>
					</tr>
					<tr>
						<td><a href=>店铺优惠</a></td>
					</tr>
				</table>
			</span>
			<hr class="hr"/>
			<span>
				<table>
					<tr>
						<th><a href=>地址管理</a></th>
					</tr>
				</table>
			</span>	
		</span>
		
		
		
		<span class="gerenxinxi_right">
			<a href="/Home/user/personal"><div>基本资料</div></a>
                        <form name="fm">
                            <input type="hidden" name="uid" value="{{session("homeUser")->uid}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" >
                            <img id="im" width="100" src="{{session('homeUser')->avartar}}">
                              <input type="file" name="avartar" id="avartar">
                        </form>
                        <form method="post" action="/Home/user/detail" >
                            <input type="hidden" name="_token" value="{{csrf_token()}}" >
                            <input type="hidden" name="uid" value="{{session("homeUser")->uid}}">
			<table  border="0px">
                            <hr/><br/>
				<tr>
					<td align="right">昵称：</td>
					<td><input type="text" name="nickname" value="{{session('homeUser')->nickname}} "></td>
				</tr>
				<tr>
					<td align="right">性别：</td>
					<td>
						<input type="radio" name="sex" value="男" @if(session("homeUser")->sex) checked @endif>男
						<input type="radio" name="sex" value="女" @if(session("homeUser")->sex) checked @endif>女
					</td>
				</tr>
				
				<tr>
					<td align="right">所在地：</td>
					<td>
						<select name="city"  onchange="c(this);">
							
							<option value="{{session('homeUser')->city}}">{{session('homeUser')->city}}</option>
							<option value="北京">北京</option>
							<option value="上海">上海</option>
                                                        <option value="台湾">台湾</option>
						</select>
						<select id="two" name="city2">
							
							<option value="{{session('homeUser')->city2}}">{{session('homeUser')->city2}}</option>
							<option value="昌平">昌平</option>
							<option value="海淀">海淀</option>
							<option value="朝阳">朝阳</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right" >生日：</td>
					<td>
						<select name="year">
							@for($i=1970;$i<=2016;$i++)
                                                         <option value="{{$i}}"> {{ $i }}</option>
                                                        
                                                        @endfor
						</select>年
						<select name="mouth">
							@for($a=1;$a<=12;$a++)
                                                        <option value="{{$a}}" >{{$a}}</option>
                                                        @endfor
						</select>月
						<select name="day">
							@for($b=1;$b<=31;$b++)
                                                        <option value="{{$b}}">{{$b}}</option>
                                                        @endfor
						</select>日 填写可享生日礼包哦~
					</td>
                                        <tr>
					<td align="right">移动电话：</td>
					<td><input type="text" name="phone" value=""></td>
				</tr>
				</tr>
			
                                <tr>
                                 
                                        <td align="right">邮箱：</td>
                                        <td><input type="text" name="email" value=""></td>
                                </tr>
			</table>
			
			
			<table>
			
                            <tr>
                                <td colspan="2" style="padding-left: 90px;" align="center"><br/>
                                    <input type="submit" value="提交">
                                    <input type="reset" value="重置">
                                </td>
                            </tr>
			</table>
			@if(count($errors)>0)
                            @foreach($errors->all() as $v)
                            {{$v}}
                            @endforeach
                        @endif
                       {{ session("info")}}
		</span>
            </form>
             <script src="{{asset('/js/home/perfect/perfect.js')}}"></script>
             <script src="{{asset('/js/home/perfect/city.js')}}"></script>
	</body>
</html>