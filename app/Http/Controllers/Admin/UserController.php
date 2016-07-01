<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
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
