<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Session,Hash;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *显示商品分类列表
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        //显示商品分类资源列表
	$del = array();
	$categories = DB::table("category")->orderByRaw("CONCAT_WS(',',path,cid)")->get();
	foreach ($categories as $key=>$tmp)
	{
	  //  var_dump(DB::table("category")->where("pid",$tmp->cid)->first());
	    $categories[$key]->cname = "||" .str_repeat("=",substr_count($tmp->path,",")*8).$tmp->cname;
	  $del[] = $tmp->pid;
	}
	//dd($del);
	//加载模板显示
	return view("admin.category.index",compact("categories"))->with("del",$del);
    }
    //设置该分类是否在导航栏显示
    public function setIsNav(Request $request)
    {
	if (false!=DB::table("category")->where("cid",$request->get("cid"))->update(["isNav"=>$request->get("isNav")]))
	{
	    return response()->json(["status"=>1,"info"=>"设置成功"]);
	} else {
	    return response()->json(["status"=>0,"info"=>"设置失败"]);
	}
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($cid = NULL)
    {
        //添加子类
	if ($cid)
	{
	    $data = DB::table("category")->where("cid",$cid)->first();
	}
	return view("admin.category.create",compact("data"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //新建分类
	$data = $request->except("_token");
	//数据入库
	if (false != $insertID = DB::table("category")->insertGetId($data))
	{
	    return redirect("/tips")->with(["info" => "Add Ok ! ID:".$insertID, "url" => "/Admin/category"]);
	} else {
	    return redirect("/tips")->with(["info" => "Add Failed ! ","url" => "/Admin/category"]);
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
    public function edit($id)
    {
        //查询高分类信息
	$category = DB::table("category")->where("cid",$id)->first();
	$pcate = DB::table("category")->where("cid",$category->pid)->pluck("cname");
	return view("admin.category.edit",["category"=>$category,"pcate" => $pcate]);
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
        //修改分类的信息
	$data = $request->except("_token","_method");
	DB::table("category")->where("cid",$id)->update($data);
	return redirect("/errors")->with(["info" => "Update OK!","url" => "/Admin/category"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除该分类
	DB::table("category")->where("cid",$id)->delete();
	//将路径中包含该分类的全部去除
	$affectedRows = DB::update("update category set path = replace(path,' ,{$id}', '') where path LIKE '%,{$id}%'");
	//返回结果
	return redirect("/tips")->with(["info" => "Update Ok.affected". $affectedRows." Line! ", "url" => "/Admin/category"]);
    }
}
