<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,
    Session,
    Hash;

class ConfigController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $config = DB::table("config")->first();
        return view("admin.config.config", ["config" => $config]);
    }

    //修改页
    public function date() {
        $config = DB::table("config")->first();
        return view("admin.config.updata", ["config" => $config]);
    }

    //修改
    public function update(Request $request) {
        $data = $request->all();
	$data = $request->except("_token");
        DB::table("config")->update($data);
        return redirect("/admin/config");
    }

    //logo修改
    public function logo(Request $request) {

        $logo = $request->file("Filedata");
        if (!$logo->isValid()) {
            return response()->json(array("status" => false, "info" => "不合法的上传"));
        }
        //重命名文件
        $suffix = $logo->getClientOriginalExtension();
        $rename = date("YmdHis") . rand(1000, 9999) . "." . $suffix;
        //转存
        $result = $logo->move("./images/home/index", $rename);
        //修改数据库
        DB::table("config")
                ->where("id", $request->get("id"))
                ->update(["logo" => "/images/home/index/" . $rename]);
        //返回结果
        return response()->json(["status" => true, "info" => "/images/home/" . $rename]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
