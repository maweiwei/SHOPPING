<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Session;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //查看所有订单
        $keyword = $request->get("keyword");
     //   dd($keyword);
        $orders = DB::table("order")
                ->leftJoin("shopcar","order.sid","=","shopcar.sid")
                ->leftJoin("goods","shopcar.gid","=","goods.gid")
                ->leftJoin("category","goods.cid","=","category.cid")
                ->leftJoin("home_user","shopcar.uid","=","home_user.uid")
                ->where("goods.name","like","%".$keyword."%")
                ->orWhere("home_user.uname","like","%".$keyword."%")
                ->orWhere("category.cname","like","%".$keyword."%")
                ->paginate(8);
        //dd($orders);
        return view("admin.order.index",compact('orders'))->with("key",$keyword);
        //dd($orders);
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
       if(DB::table("order")->where("oid",$id)->update(["send"=>1])){
           return back();
       }
        //dd($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
