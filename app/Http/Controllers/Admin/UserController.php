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
                ->leftJoin("user_group", "user.uid", "=", "user_group.uid")
		->where("uname","like","%".$keyword."%")
		->orWhere("nickname","like","%".$keyword."%")
		->paginate(5);
        $groups = DB::table("group_rule")->get();
	return view("admin/common/user_list",["users" => $users,"groups" => $groups,"key"=>$keyword]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //添加用户页面
        $groups = DB::table("group_rule")->get();
	return view("admin.user.add",["groups" => $groups]);
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
	$data = $request->except("_token","repassword","groupid");
	$data["password"]=Hash::make($data["password"]);
	if(false !== $id=DB::table("user")->insertGetId($data)){
            //$id = DB::table('user')->insertGetId($data);
            //dd($id);
            DB::table("user_group")->insert(["uid"=>$id,"groupid"=>$request->get('groupid')]);
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
	$user = DB::table("user")
                ->leftJoin("user_group","user.uid","=","user_group.uid")
                ->where("user.uid",$id)->first();
         $groups = DB::table("group_rule")->get();
	return view("admin/user/edit",["user"=>$user,"groups" => $groups]);
	
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
	$data = $request->except("_token","repassword","uname","groupid");
	if(!empty($data["password"])){

	    $data["password"]=Hash::make($data['password']);

	    $data["password"]=Hash::make($data["password"]);

	} else {
	    unset($data["password"]);
	}
	if(false !== $a=DB::table("user")->where("uid",$id)->update($data)){
            DB::table("user_group")->where("uid",$id)->update(["groupid"=>$request->get("groupid")]);
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
    public function setGroup(Request $request)
    {
      if(false !== DB::table("user_group")->where("uid",$request->get('uid'))->update(["groupid"=>$request->get('groupid')])){
          return response()->json(["status" => 1, "info" => "修改成功"]);
      }else{
          return response()->json(["status" => 0, "info" => "修改失败"]);
      }
    }
}
