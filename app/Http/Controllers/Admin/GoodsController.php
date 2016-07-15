<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Hash,Session;
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        //商品列表
    public function index(Request $request)
    {
	$keyword = $request->get("keyword");
        $goods=DB::table("goods")
                ->leftJoin("category","goods.cid","=","category.cid")
		->where("name","like","%".$keyword."%")
                ->paginate(10);
        return view("admin.goods.index",["goods"=>$goods,"key"=>$keyword]);
    }
    //删除商品
    public function delete($gid)
    {
        if (DB::table("goods")->where("gid",$gid)->delete()){
	    return redirect("/admin/goods")->with(["info"=>":-D删除成功"]);
	} else {
	    return back()->with(["info"=>"/(ㄒoㄒ)/~~删除失败"]);
	}
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //添加商品页面
    public function create()
    {
        $category=DB::table("category")->where("pid",0)->get();
        $childs=DB::table("category")->where("pid",1)->get();
        return view("admin.goods.create",["category"=>$category,"childs"=>$childs]);
    }
    public function select(Request $request)
    {
       $children = DB::table("category")->where("pid",$request->get("pid"))->get();
       return response()->json(["status"=>1,"info"=>$children]);
    }

    //添加商品动作
    public function add(Request $request)
    {
        $this->validate($request,[
	    "name"=>"required",
	    "price"=>"required",
	    "content"=>"required"
	],[
	    "name.required"=>"商品名不能为空",
	    "price.required"=>"价格不能为空",
	    "content.required"=>"介绍不能为空",
	]);
        
	$data = $request->except("_token","cid1");//dd($data);
	if(false !== $id=DB::table("goods")->insert($data)){
	    return redirect("/admin/goods");
	} else {
	    return back()->with(["info"=>"插入失败"]);
	}
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //添加商品的图片
        $avartar = $request->file("Filedata");
	if (!$avartar->isValid()) {
	   return response()->json(array("status" => false, "info" => "上传不合法"));
	}
	//重命名文件
	$suffix = $avartar->getClientOriginalExtension();
	$rename = date("YmdHis") . rand(1000,9999) . "." . $suffix;
	//转存、返回结果集
        if($avartar->move("./images/home/goods",$rename)){
            echo json_encode(array("status" => true,"info" => "/images/home/goods/".$rename));
        }else{
             echo json_encode(array("status" => false,"info" => "上传失败"));
        }
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
    public function edit(Request $request)
    {
        //上传商品图片
        $avartar = $request->file("Filedata");
	if (!$avartar->isValid()) {
	   return response()->json(array("status" => false, "info" => "上传不合法"));
	}
	//重命名文件
	$suffix = $avartar->getClientOriginalExtension();
	$rename = date("YmdHis") . rand(1000,9999) . "." . $suffix;
	//转存
	$result = $avartar->move("./images/home/goods",$rename);
	
	//修改数据库
        $user = DB::table("goods")->where("gid",$request->get("gid"))->update(["img"=>"/images/home/goods/".$rename]);
       
	//返回结果集
	echo json_encode(array("status" => true,"info" => "/images/home/goods/".$rename));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //更改商品页
    public function update(Request $request, $gid)
    {
         $goods=DB::table("goods")->where("gid","=",$gid)->first();
         $goodcid=DB::table("goods")->where("gid","=",$gid)->first()->cid;
         
          $category=DB::table("category")->where("pid",0)->get();
          $categs=DB::table("category")->where("cid",$goodcid)->first();
          $categspid=DB::table("category")->where("cid",$goodcid)->first()->pid;
          $catetwo=DB::table("category")->where("pid",$categspid)->get();
         return view("/admin/goods/update",["goods"=>$goods,"category"=>$category,"categs"=>$categs,"catetwo"=>$catetwo]);
    }
    //更改商品动作
    public function updateing(Request $request, $gid)
    {
	$data = $request->all();
	$data = $request->except("_token","cid1");
	if(false !== $a=DB::table("goods")->where("gid",$gid)->update($data)){
	    return redirect("/admin/goods");
	} else {
	    return back()->with(["info"=>"/(ㄒoㄒ)/~~修改失败!"]);
	}
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
