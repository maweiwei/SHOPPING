<?php

namespace App\Http\Controllers\Home;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Hash,Session;
class AdressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       //判断用户输入信息
        $this->validate($request,[
            "city"  => "required",
            "city2" => "required",
            "city3" => "required",
             "postcode" => "required|min:6|max:6",
             "uname" => "required",
             "phone" => "required|min:11|max:11",
           
        ],[
            "city.required" => "省份没有选择", 
            "city2.required" => "地区没有选择", 
            "city3.required" => "详细地址没有填写", 
            "uname.required" => "收货人必须填写" ,
            "postcode.min" => "邮编输入不合法,必须为6位",
            "postcode.max" => "邮编输入不合法,必须为6位",
            "postcode.required" => "邮编必须填写",
            "phone.required" => "手机号码必须填写", 
            "phone.min" => "手机号输入不合法，必须为11位",
            "phone.max" => "手机号输入不合法，必须为11位",
            
        ]);
        $data = $request->except("_token","city","city2","city3");
        $data["adress"] =  $request->get("city").$request->get("city2").$request->get("city3");
       // dd($data);
        if(false != DB::table("good_adress")->insert($data)){
            return redirect("/Home/user/site");
        }else{
            return back()->with(["info"=>"添加失败"]);
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
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
       // dd($request->all());
      //判断用户输入的值
        $this->validate($request,[
            "city" => "required",
            "city2" => "required",
            "city3" => "required",
            "uname" => "required",
            "postcode" => "required|min:6|max:6",
            "phone"   => "required|min:11|max:11",
        ],[
            "city.required" => "省份没有选择",
            "city2.required" => "地区没有选择",
            "city3.required" => "详细地址没有填写",
            "postcode.required" => "邮编必须填写",
            "uname.required"  => "收货人未填写",
            "postcode.min" => "邮编输入不合法，必须为6位",
            "postcode.max" => "邮编输入不合法，必须为6位",
            "phone.required" => "手机号必须输入",
            "phone.min"  => "手机号输入不合法，必须为11位",
            "phone.max"  => "手机号输入不合法，必须为11位",
        ]);
        //接收值
           $data = $request->except("_token","city","city2","city3","id");
          $data["adress"] = $request->get('city').$request->get("city2").$request->get("city3"); 
         // 修改入库
         // dd($data);
          if(DB::table("good_adress")
                  ->where("id",$request->get("id"))
                  ->update($data)){
                  return redirect("/Home/user/site");
                  }else{
                  return back()->with(["info"=>"修改失败"]);
                  }
                 
          
                
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
        $data = DB::table("good_adress")
                ->where("id",$id)
                ->first();
     // dd($data);
    return view("home.user.adress",compact("data"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // dd($id);
        //删除用户
       if( DB::table("good_adress")
                ->where("id","$id")
                ->delete()){
                  return redirect("Home/user/site");
                }else{
                  return back()->with(["info"=>"删除失败"]);
                }
    }
}
