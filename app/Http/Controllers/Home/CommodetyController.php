<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Session;
class CommodetyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $keyword= $request->get("keyword");
       $data= DB::table("goods")
                ->leftJoin("commodity","goods.gid","=","commodity.gid")
                ->where("commodity.uid",Session::get('homeUser')->uid)
                ->where("goods.name","like","%".$keyword."%")
                ->get();
       // $data['uid'] = session('homeUser')->uid;
       // dd($data);
        return view("home.user.commodity",compact("data"))->with(["key"=>$keyword]);
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
    public function destroy(Request $request,$gid)
    {
       
        if(DB::table("commodity")
        ->where("gid",$gid)
        ->delete()){
            return back()->with(['info'=>"删除成功"]);
        }else{
            return back()->with(['info'=>"删除失败"]);
        }       
    }
}
