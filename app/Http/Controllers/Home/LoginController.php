<?php

namespace App\Http\Controllers\Home;
use Illuminate\Http\Request;
use Session,Validator;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //显示登录表单
    public function index()
    {
        return view("home.login.login");
    }
  
    //登录验证方法
    public function logTodo(Request $request)
    {
	$data = $request->only("uname","password");
	
//	$result = Validator::make($data,[
//	    "uname" => "required",
//	    "password" => "required|between:6,15"
//	]);
//	//如果验证失败 则跳回 并输出错误提示
//	if ($result->fails())
//	{
//	    return back()->with(['info '=> $result->errors()]);
//	}
	//账号如果不存在 则跳回 并输出错误信息
<<<<<<< HEAD
	$userModel = DB::table("home_user")->where('uname',$data['uname'])->first();
=======
	$userModel = DB::table("home_user","user")->where('uname',$data['uname'])->first();
>>>>>>> 85837096b2e0816511f3107382174567475b6509
	if (empty($userModel))
	{
	    $request->flash();
	    return back()->with(['info' => '**账号不存在!**']);
	} else if (!Hash::check($data['password'],$userModel->password))
	{
	    $request->flash();
	    return back()->with(['info' => '**密码不正确!**']);
	} else
	{
	    session(['homeUser' => $userModel]);
	    return redirect("/Home");
	}
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
