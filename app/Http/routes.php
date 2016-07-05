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
//网站首页
Route::get('/', function () {
    return view('welcome');
});

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



