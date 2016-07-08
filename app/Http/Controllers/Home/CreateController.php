<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Hash,Session;
class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("home.cerate.index");
    }
    public function captcha($tmp)
	{
	    //生成验证码图片的Builder对象，配置相应的属性
	    $builder = new CaptchaBuilder;
	    //可以设置图片宽高及字体
	    $builder->build($width = 75,$height = 23,$font =null);
	    //获取验证码的内容
	    $phrase = $builder->getPhrase();
	    
	    //把内容存入session
	   session(["code"=>$phrase]);
	    
	    //生成图片
	    header("Cache-Control: no-cache, must-revalidate");
	    header('Content-Type: image/jpeg');
	    $builder->output();
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        //验证码是否正确
        if (session("code") != $request->get("code"))
	    {
		$request->flash();
		return back()->with(["info" => "*验证码错误"]);
	    }
         //添加用户
	$this->validate($request,[
	   "uname"=>"required|unique:home_user",
	    "password"=>"required|between:6,15",
	    "repassword"=>"required|same:password",
	    "nickname"=>"required",
	    "sex"=>"required"
	],[
	    "uname.required"=>"&nbsp;&nbsp;*账户不能为空",
	    "uname.unique"=>"&nbsp;&nbsp;*账户已存在",
	    "nickname.required"=>"&nbsp;&nbsp;*昵称不能为空",
	    "sex.required"=>"&nbsp;&nbsp;*性别未选择",
	    "password.required"=>"&nbsp;&nbsp;*密码不能为空",
	    "repassword.same"=>"&nbsp;&nbsp;*输入密码不一致",
	    "repassword.required"=>"&nbsp;&nbsp;*确认密码不能为空",
	    "password.between"=>"&nbsp;&nbsp;*密码长度6-15位"
	]);
	$data = $request->except("_token","repassword","code");
	$data["password"]=Hash::make($data["password"]);
	if(DB::table("home_user")->insert($data)){
	    return redirect("/Home/login");
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
