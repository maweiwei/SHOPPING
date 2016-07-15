<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,
    Session,
    Hash;

class GoodsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$gid) {
        $keyword = $request->get("keyword");
        $category = DB::table("category")->where("pid", 0)->get();
        $goods = DB::table("goods")
                ->leftJoin("category", "goods.cid", "=", "category.cid")
                ->where("gid", $gid)
                ->first();
        $num=DB::table("message")
                ->where("gid",$gid)
                ->count("*");
        return view("home.goods.goodsxq", ["key"=>$keyword,"category" => $category, "goods" => $goods,"num"=>$num]);
    }
    //商品评价
    public function good(Request $request,$gid) {
        $keyword = $request->get("keyword");
        $category = DB::table("category")->where("pid", 0)->get();
        $goods = DB::table("goods")
                ->leftJoin("category", "goods.cid", "=", "category.cid")
                ->where("gid", $gid)
                ->first();
        $message=DB::table("message")
                ->leftJoin("home_user","message.uid","=","home_user.uid")
                ->where("gid",$gid)
                ->get();
        $num=DB::table("message")
                ->where("gid",$gid)
                ->count("*");
        return view("home.goods.goodspj", ["key"=>$keyword,"category" => $category, "goods" => $goods, "message"=>$message,"num"=>$num]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        //商品入购物车
        //dd($request->all());
        if (!Session::has("homeUser")) {
            return back()->with(["info" => "请登陆"]);
        }
        $data = $request->only("gid", "number");
        $data["sum"] = $request->get("number") * $request->get("price");
        $data['uid'] = session('homeUser')->uid;
        // dd($data);
        if (false != DB::table("shopcar")->insert($data)) {
            return back()->with(["info" => "已经加入购物车"]);
        } else {
            return back()->with(["info" => "加入购物车失败"]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
