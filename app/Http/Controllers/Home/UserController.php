<?php

namespace App\Http\Controllers\Home;

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
        $user =DB::table("home_user")
                ->where("uname","like","%".$keyword."%")
                ->orWhere("nickname","like","%".$keyword."%")
                ->paginate(5);
       return view("home.user.user",compact("user"))->with("key",$keyword);
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
       //编辑页面
        $user =DB::table("home_user")->where("uid",$id)->first();
        return view("home/user/edit",  compact("user"));    }

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
        "password" =>"between:6,15",
         "repassword" =>"same:password",
          "nickname" =>"required"
        ],[
            "password.between" => "密码长度应该在6-15",
            "repassword.same" =>"两次密码不一致！",
            "nickname.required" =>"昵称不能为空"
        ]);
        $data= $request->except("_token","repassword","uname");
        if(!empty($data["password"])){
            $data["password"]=Hash::make($data['password']);
        }else{
            unset($data["password"]);
        }
        //修改成功
        if(DB::table("home_user")->where("uid",$id)->update($data)){
            return redirect("/Home/user");
            
        }else{
            return back()->with(["info"=> "修改失败"]);
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
        if(DB::table("home_user")->where("uid",$id)->delete()){
            return redirect("Home/user")->with(["info"=>"删除成功"]);
        }else{
            return back()->with(["info"=>"删除失败"]);
        }
    }
}
