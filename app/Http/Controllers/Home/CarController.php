<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //shopcar status权限 0默认 1添加订单 2确认收货->历史（未评论） 3历史（以评论）
    
    
    public function index()
    {
	
	if (empty(session("homeUser")->uid)){
	    return view("home.login.login");
	    exit;
	}
	
	//购物车页面 订单页
	$car = DB::table("shopcar")
		   ->leftJoin("goods","shopcar.gid","=","goods.gid")
		   ->where("shopcar.uid",session("homeUser")->uid)
		   ->where("shopcar.status","=",0)->get();
	
	//商品总数量
	$num = 0;
	//商品总价格
	$sum = 0;
	foreach($car as $tmp)
	{
	    $sum += $tmp->price*$tmp->number;
	    $num += $tmp->number;
	}
	
	if (!empty($car)){
	    return view("home.car.index",compact("car","num","sum"));
	} else {
	     return view("home.car.null");
	}
    }
    //空购物车页面
    public function null()
    {
	return view("/home/car/null");
    }

    //确认订单信息页面
    public function subcar()
    {
	//购物车信息
	$car = DB::table("shopcar")
		   ->leftJoin("goods","shopcar.gid","=","goods.gid")
		   ->where("shopcar.uid",session("homeUser")->uid)
		   ->where("shopcar.status","!=",1)->get();
	
	//地址
	$adress = DB::table("good_adress")
		  ->where("good_adress.uid","=",session("homeUser")->uid)->orderBy("status","desc")->get();
	
	
	//商品总数量
	$num = 0;
       
	//商品总价格
	$sum = 0;
	foreach($car as $tmp)
	{
	    $sum += $tmp->price*$tmp->number;
	    $num += $tmp->number;
	}
	
	if (!empty($car)){
	    return view("home.car.subcar",compact("car","num","sum","adress"));
	} else {
	     return view("home.car.null");
	}
    }
    
    //订单完成页面
    public function endcar()
    {
	
	
	
	//获取地址
	$addr = DB::table("good_adress")
		->where("good_adress.uid","=",session("homeUser")->uid)
		->where("good_adress.status","=",1)->first();
	$str = "$addr->uname".",".$addr->phone.","."$addr->adress";
	
	$car = DB::table("shopcar")
	    ->where("shopcar.uid","=",session("homeUser")->uid)
	    ->where("shopcar.status","=","0")->get();
	
	//时间
	$time = date("Y-m-d H:i:s");
	//插入信息
	foreach ($car as $tmp)
	{
	    $order = DB::table("order")->insert(
		    ["sid"=>$tmp->sid,"uid"=>$tmp->uid,"addr"=>$str,"odate"=>$time]
	    );
	}
	//修改状态值
	$shopcar = DB::table("shopcar")
		->where("shopcar.uid","=",session("homeUser")->uid)
		->where("shopcar.status","=","0")->update(["shopcar.status"=>1]);
	return view("home.car.endcar");
    }
    
    //订单页
    public function indent()
    {
	if (empty(session("homeUser")->uid)){
	    return view("home.login.login");
	    exit;
	}
	$order = DB::table("order")
		->leftJoin("shopcar","order.sid","=","shopcar.sid")
		->leftJoin("goods","shopcar.gid","=","goods.gid")
		->where("order.uid","=",session("homeUser")->uid)
		->where("shopcar.status","=","1")
		->where("order.send","!=",2)
		->get();
	return view("home.car.indent",compact("order"));
    }
    
    //收货完成
    public function gopl($sid)
    {
	DB::table("order")
		->where("order.sid","=",$sid)->update(["order.send"=>2]);
	return view("home.car.gopl");
    }
    
    public function history()
    {
	$history = DB::table("order")
		->leftJoin("shopcar","order.sid","=","shopcar.sid")
		->leftJoin("goods","shopcar.gid","=","goods.gid")
		->where("shopcar.uid","=",session("homeUser")->uid)
		->where("shopcar.status","=",1)
		->where("order.send","=",2)->orderBy("order.oid","desc")
		->get();
	return view("home.car.history",compact("history"));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //修改购物车里的数量和小计
	//return response()->json(["status"=>true,"info"=>$request->get("num").$request->get("sid").$request->get("pri")]);
	DB::table("shopcar")->where("sid",$request->get("sid"))->update(["number"=>$request->get("num"),"sum"=>$request->get("num")*$request->get("pri")]);
	return response()->json(["status"=>true,"info"=>"修改成功"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($gid)
    {
        //删除购物车物品
	if(DB::table("shopcar")->where("gid",$gid)->delete()){
	   if(!empty(DB::table("shopcar")->where("uid",session("homeUser")->uid)->get())){
	       return back();
	   } else {
	       return redirect("/null");
	   }
	}
    }
    
}
