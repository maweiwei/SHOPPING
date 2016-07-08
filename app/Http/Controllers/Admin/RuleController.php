<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Session;
class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //显示所有权限
         $rules = DB::table("user_rule")
                 ->where("title","like","%".$request->get("keyword")."%")
                 ->orWhere("name","like","%".$request->get("keyword")."%")
                 ->paginate(8);
        return view("admin.rule.index", ["rules" => $rules,"key"=>$request->get("keyword")]);
    }
    public function setStatus(Request $request)
    {
        //显示所有权限
        if (false !== DB::table("user_rule")->where("id", $request->get("rule"))->update(["status" => $request->get("status")]))
        {
            return response()->json(["status" => 1, "info" => "操作成功"]);
        } else
        {
            return response()->json(["status" => 0, "info" => "操作失败"]);
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
       return view("admin.rule.create");
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
        //验证数据
       // dd($request->all());
        $this->validate($request, [
            "title" => "required",
            "name" => "required",
        ], [
            "title.required" => "规则名称未填写",
            "name.required" => "规则设置未填写",
        ]);
        //数据入库
        $data = $request->except("_token");
        if (false !== $insertID = DB::table("user_rule")->insertGetId($data))
        {
            return redirect("/errors")->with(["info" => "添加成功，规则id： ".$insertID, "url" => "/admin/rule"]);
        } else
        {
            return back()->with(["info" => "添加失败"]);
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
         //dd($id);
        //查询该权限信心
        $rule = DB::table("user_rule")->where("id", $id)->first();
        //在模板中显示
        return view("admin.rule.edit",compact("rule"));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('ruleid');
      //  dd($id);
        $data = $request->only("title", "name", "status");
        if (false !== DB::table("user_rule")->where("id", $id)->update($data))
        {
            return redirect("/errors")->with(["info" => "修改成功", "url" => "/admin/rule"]);
        } else 
        {
            return redirect("/errors")->with(["info" => "修改失败", "url" => "/admin/rule"]);
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
        //dd($id);
        //删除该权限
        if (false !== DB::table("user_rule")->where("id", $id)->delete())
        {
            return redirect("/errors")->with(["info" => "删除 成功.", "url" => "/admin/rule"]);
        } else 
        {
            return redirect("/errors")->with(["info" => "删除 失败.", "url" => "/admin/rule"]);
        }
    }
}
