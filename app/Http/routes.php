<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//后台首页
Route::get("/Admin","Admin\IndexController@index");
//后台登录
Route::get("/login","Admin\LoginController@index");

//验证码请求路由规则
Route::get("/captcha/{tmp}","Admin\LoginController@captcha");
//登录验证
Route::post("/logTodo","Admin\LoginController@logTodo");
//退出登录
Route::get("/logout","Admin\LoginController@logout");
//修改头像
Route::post("/user/avartar","Admin\UserController@avartar");

//用户列表页
Route::any("/user_list","Admin\UserController@index");
//添加用户页面
Route::get("/admin/user/add","Admin\UserController@create");
//执行添加
Route::post("/admin/user/store","Admin\UserController@store");
//编辑页面
Route::get("/admin/user/edit/{uid}","Admin\UserController@edit");
Route::post("/admin/user/update/{uid}","Admin\UserController@update");
//删除用户
Route::get("/admin/user/delete/{uid}","Admin\UserController@destroy");
//===================权限管理=====================
Route::post("/admin/user/setGroup","Admin\UserController@setGroup");
Route::get("/errors",function(){
   // dd(session("info"));
    return view("errors.error");
});
//============分组增删改查======================
//分组列表详细信息显示
Route::resource("/admin/group","Admin\GroupController");
//分组列表里点击修改
Route::post("/admin/group/setRule","Admin\GroupController@setRule");
//提交修改的值
Route::post("/admin/group/update","Admin\GroupController@update");
//权限删除
Route::get("/admin/group/delete/{tmp}","Admin\GroupController@destroy");
//============权限======================
//所有权限
Route::resource("/admin/rule", "Admin\RuleController");
Route::any("/admin/rule/index", "Admin\RuleController@index");
//禁用启用
Route::post("/admin/rule/setStatus", "Admin\RuleController@setStatus");
//编辑
Route::post("/admin/rule/update", "Admin\RuleController@update");
//删除
Route::get("/admin/rule/delete/{tmp}", "Admin\RuleController@destroy");
//后台top
Route::get("/top",function (){
   return view("admin.common.top"); 
});

//后台left
Route::get("/left",function (){
   return view("admin.common.left"); 
});

//后台right
Route::get("/right",function (){
    return view("admin.common.right");
});

//前台首页
Route::get("/","Home\IndexController@index");

//前台登录页面
Route::get("/Home/login","Home\LoginController@index");
//登录处理
Route::post("/Home/logTodo","Home\LoginController@logTodo");

//前台注册
Route::get("/Home/create","Home\CreateController@index");
//添加用户
Route::post("/Home/user/add","Home\CreateController@add");

//前台用户列表
Route::any("/Home/user","Home\UserController@index");

//前台用户修改
Route::get("/Home/user/edit/{uid}","Home\UserController@edit");
Route::post("/Home/user/update/{uid}","Home\UserController@update");
//前台用户删除
Route::get("/Home/user/delete/{uid}","Home\UserController@destroy");
//商品管理
Route::get("/admin/goods","Admin\GoodsController@index");
//添加商品页
Route::get("/admin/goods/create","Admin\GoodsController@create");
Route::post("/Home/goods/select","Admin\GoodsController@select");
//添加商品动作
Route::post("/admin/goods/add","Admin\GoodsController@add");
//更改商品页
Route::get("/admin/goods/update/{gid}","Admin\GoodsController@update");
//更改商品动作
Route::post("/admin/goods/updateing/{gid}","Admin\GoodsController@updateing");
//删除商品
Route::get("/admin/goods/delete/{gid}","Admin\GoodsController@delete");