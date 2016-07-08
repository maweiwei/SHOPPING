<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Hash,Session;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //用户列表
	$keyword = $request->get("keyword");
	$users = DB::table("user")
		->where("uname","like","%".$keyword."%")
		->orWhere("nickname","like","%".$keyword."%")
		->paginate(5);
	return view("admin/common/user_list",compact("users"))->with("key",$keyword);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //添加用户页面
	return view("admin/user/add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //添加用户
	$this->validate($request,[
	   "uname"=>"required|unique:user",
	    "password"=>"required|between:6,15",
	    "repassword"=>"required|same:password",
	    "nickname"=>"required"
	],[
	    "uname.required"=>"账户不能为空",
	    "uname.unique"=>"账户已存在",
	    "nickname.required"=>"昵称不能为空",
	    "password.required"=>"密码不能为空",
	    "repassword.same"=>"两次输入密码不一致",
	    "repassword.required"=>"确认密码不能为空",
	    "password.between"=>"密码长度6-15位"
	]);
	$data = $request->except("_token","repassword");
	$data["password"]=Hash::make($data["password"]);
	if(DB::table("user")->insert($data)){
	    return redirect("/user_list");
	} else {
	    return back()->with(["info"=>"插入失败"]);
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
        //编辑页面
	$user = DB::table("user")->where("uid",$id)->first();
	return view("admin/user/edit",compact("user"));
	
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
        //修改入库
	$data = $request->all();
	$this->validate($request,[
	    "password"=>"between:6,15",
	    "repassword"=>"same:password",
	    "nickname"=>"required"
	],[
	    "password.between"=>"密码长度应该在6-15位！",
	    "repassword.same"=>"两次密码不一致！",
	    "nickname.required"=>"昵称不能为空！"
	]);
	$data = $request->except("_token","repassword","uname");
	if(!empty($data["password"])){
	    $data["password"]=Hash::make($data["password"]);
	} else {
	    unset($data["password"]);
	}
	if(DB::table("user")->where("uid",$id)->update($data)){
	    return redirect("/user_list");
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
        //删除用户
	if (DB::table("user")->where("uid",$id)->delete()){
	    return redirect("/user_list")->with(["info"=>":-D删除成功"]);
	} else {
	    return back()->with(["info"=>"/(ㄒoㄒ)/~~删除失败"]);
	}
    }
    
    public function avartar(Request $request)
    {
	//转存文件
	$avartar = $request->file("avartar");
	if (!$avartar->isValid()) {
	    echo json_encode(array("status" => false,"info" => "上传不合法"));
	    exit;
	}
	//重命名文件
	$suffix = $avartar->getClientOriginalExtension();
	$rename = date("YmdHis") . rand(1000,9999) . "." . $suffix;
	//转存
	$result = $avartar->move("./uploads/avartar",$rename);
	
	//修改数据库
	$userModel = new \App\User();
	$user = $userModel->find($request->get("uid"));
	$user->avartar = "/uploads/avartar/" . $rename;
	$user->save();
	//返回结果集
	echo json_encode(array("startus" => true,"info" => "/uploads/avartar/" . $name));
    }
}
