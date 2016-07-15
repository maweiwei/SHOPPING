<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Session,Hash;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get("keyword");
        $category=DB::table("category")->where("pid",0)->get();
        return view("home.index",["key"=>$keyword,"category"=>$category]);
    }
    //前台分类页
    public function category(Request $request,$pid)
    {
        $keyword = $request->get("keyword");
        $category=DB::table("category")->where("pid",0)->get();
        $cate=DB::table("category")->where("category.pid",$pid)->get();
        $goods=DB::table("goods")
                ->leftJoin("category","category.cid","=","goods.cid")
                ->where("category.pid",$pid)
                ->paginate(20);
        $count=DB::table("goods")
                ->leftJoin("category","category.cid","=","goods.cid")
                ->where("category.pid",$pid)
                ->count("*");
        return view("home.category",["key"=>$keyword,"category"=>$category,"cate"=>$cate,"goods"=>$goods,"count"=>$count]);
    }
    //前台分类子页
    public function childs(Request $request,$pid,$cid)
    {
        $keyword = $request->get("keyword");
        $category=DB::table("category")->where("pid",0)->get();
        $cate=DB::table("category")->where("category.pid",$pid)->get();
        $goods=DB::table("goods")
                ->where("goods.cid",$cid)
                ->paginate(20);
        $count=DB::table("goods")
                ->where("goods.cid",$cid)
                ->count("*");
        return view("home.category",["key"=>$keyword,"category"=>$category,"cate"=>$cate,"goods"=>$goods,"count"=>$count]);
    }
    //搜索
    public function cate(Request $request)
    {
        $keyword = $request->get("keyword");
        $category=DB::table("category")->where("pid",0)->get();
        $goods=DB::table("goods")
                ->where("name","like","%".$keyword."%")
                ->paginate(20);
        $count=DB::table("goods")
                ->where("name","like","%".$keyword."%")
                ->count("*");
        return view("home.category",["key"=>$keyword,"category"=>$category,"goods"=>$goods,"count"=>$count]);
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
