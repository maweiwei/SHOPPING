<?php

/*
<<<<<<< HEAD
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
=======
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
//Route::get('/', function () {
//    return view('welcome');
//});

>>>>>>> c98d5fcfb76f08a33d8a6cd67d450a680cf39a43
//调用系统的错误页
Route::get("/tips", function () {
    return view("errors.tips");
    exit;
});
//后台首页
Route::get("/Admin", "Admin\IndexController@index");
//后台登录
Route::get("/login", "Admin\LoginController@index");

//验证码请求路由规则
Route::get("/captcha/{tmp}", "Admin\LoginController@captcha");
//登录验证
Route::post("/logTodo", "Admin\LoginController@logTodo");
//退出登录
Route::get("/logout", "Admin\LoginController@logout");
//修改头像
<<<<<<< HEAD
Route::post("/user/avartar", "Admin\UserController@avartar");
=======
Route::any("/admin/user/avartar","Admin\UserController@avartar");
//编辑里修改头像
Route::any("/admin/user/edit_avartar","Admin\UserController@edit_avartar");

>>>>>>> c98d5fcfb76f08a33d8a6cd67d450a680cf39a43

//用户列表页
Route::any("/user_list", "Admin\UserController@index");
//添加用户页面
Route::get("/admin/user/add", "Admin\UserController@create");
//执行添加
Route::post("/admin/user/store", "Admin\UserController@store");
//编辑页面
Route::get("/admin/user/edit/{uid}", "Admin\UserController@edit");
Route::post("/admin/user/update/{uid}", "Admin\UserController@update");
//删除用户
Route::get("/admin/user/delete/{uid}", "Admin\UserController@destroy");
//===================权限管理=====================
Route::post("/admin/user/setGroup", "Admin\UserController@setGroup");
Route::get("/errors", function() {
    // dd(session("info"));
    return view("errors.error");
});
//============分组增删改查======================
//分组列表详细信息显示
Route::resource("/admin/group", "Admin\GroupController");
//分组列表里点击修改
Route::post("/admin/group/setRule", "Admin\GroupController@setRule");
//提交修改的值
Route::post("/admin/group/update", "Admin\GroupController@update");
//权限删除
Route::get("/admin/group/delete/{tmp}", "Admin\GroupController@destroy");
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
Route::get("/top", function () {
    return view("admin.common.top");
});

//后台left
Route::get("/left", function () {
    return view("admin.common.left");
});

//后台right
Route::get("/right", function () {
    return view("admin.common.right");
});
//后台配置
Route::get("/admin/config","Admin\ConfigController@index");
//配置修改
Route::get("/admin/config/date","Admin\ConfigController@date");
Route::any("/admin/config/update","Admin\ConfigController@update");
//logo修改
Route::post("/admin/logo", "Admin\ConfigController@logo");
//广告
Route::get("/admin/gg/new","Admin\GgController@index");
//前台首页
<<<<<<< HEAD
Route::get("/", "Home\IndexController@index");
//前台商品类
Route::get("/hone/category/{pid}", "Home\IndexController@category");
Route::get("/hone/category/{pid}/{cid}", "Home\IndexController@childs");
//搜索
Route::any("/home/category", "Home\IndexController@cate");
//商品详情页
Route::get("/home/category/goods/{gid}", "Home\GoodsController@Index");
//商品评价
Route::get("/home/category/good/{gid}", "Home\GoodsController@good");
//商品加入购物车
Route::post("/Home/goods/incar", "Home\GoodsController@create");
=======
<<<<<<< HEAD
Route::get("/Home","Home\IndexController@index");
=======
Route::get("/","Home\IndexController@index");
<<<<<<< HEAD
//退出前台登录
Route::get("/Home/logOut","Home\LoginController@logOut");
=======
>>>>>>> 3c5c63d32e70568e5cf6d23ba79ce6eba8b53457
>>>>>>> 2948898854d95509f415060d026e242878b06474

>>>>>>> c98d5fcfb76f08a33d8a6cd67d450a680cf39a43
//前台登录页面
Route::get("/Home/login", "Home\LoginController@index");
//登录处理
Route::post("/Home/logTodo", "Home\LoginController@logTodo");

//前台注册
Route::get("/Home/create", "Home\CreateController@index");
//添加用户
<<<<<<< HEAD
Route::post("/Home/user/add", "Home\CreateController@add");
=======
Route::post("/Home/user/add","Home\CreateController@add");
>>>>>>> c98d5fcfb76f08a33d8a6cd67d450a680cf39a43
//前台用户列表
Route::any("/Home/user", "Home\UserController@index");

//前台用户修改
Route::get("/Home/user/edit/{uid}", "Home\UserController@edit");
Route::post("/Home/user/update/{uid}", "Home\UserController@update");
//前台用户删除
<<<<<<< HEAD
Route::get("/Home/user/delete/{uid}", "Home\UserController@destroy");
//前台用户个人信息
Route::get("/Home/user/personal", "Home\UserController@personal");
//商品管理
Route::get("/admin/goods", "Admin\GoodsController@index");
//添加商品页
Route::get("/admin/goods/create", "Admin\GoodsController@create");
Route::post("/Home/goods/select", "Admin\GoodsController@select");
=======
Route::get("/Home/user/delete/{uid}","Home\UserController@destroy");
<<<<<<< HEAD
//前台用户评论后台展示
Route::any("/Home/user/message","Home\MessageController@index");
//前台用户评论删除
Route::get("/Home/message/destroy/{mid}","Home\MessageController@destroy");
=======
//前台用户个人信息
Route::get("/Home/user/personal","Home\UserController@personal");
=======
<<<<<<< HEAD
>>>>>>> c9e636ea5cf73c86efbeb0413cbee032ee026c27
//前台用户个人信息
Route::get("/Home/user/personal","Home\UserController@personal");
//前台用户个人完善
Route::get("/Home/user/perfect","Home\UserController@perfect");
Route::post("/Home/user/detail","Home\UserController@detail");
//前台用户头像修改
Route::any("/Home/user/avartar","Home\UserController@avartar");
//收货地址展示页
Route::any("/Home/user/site","Home\UserController@site");
//收货地址添加控制
Route::any("/Home/adress","Home\AdressController@create");
//收货地址编辑展示页
Route::get("/Home/adress/update/{id}","Home\AdressController@update");
//收货地址修改页
Route::post("/Home/adress/edit","Home\AdressController@edit");
//收获地址删除
Route::get("/Home/adress/destroy/{id}","Home\AdressController@destroy");
//商品收藏展示页
Route::any("/Home/commodity/index","Home\CommodetyController@index");
//商品收藏删除页
Route::get("/Home/commodity/destroy/{gid}","Home\CommodetyController@destroy");

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 3c5c63d32e70568e5cf6d23ba79ce6eba8b53457
>>>>>>> 2948898854d95509f415060d026e242878b06474
>>>>>>> c9e636ea5cf73c86efbeb0413cbee032ee026c27
//商品管理
Route::any("/admin/goods","Admin\GoodsController@index");
//添加商品页
Route::get("/admin/goods/create","Admin\GoodsController@create");
Route::post("/Home/goods/select","Admin\GoodsController@select");
Route::post("/Home/goods/add_img","Admin\GoodsController@store");
>>>>>>> c98d5fcfb76f08a33d8a6cd67d450a680cf39a43
//添加商品动作
Route::post("/admin/goods/add", "Admin\GoodsController@add");
//更改商品页
Route::get("/admin/goods/update/{gid}", "Admin\GoodsController@update");
//更改商品动作
<<<<<<< HEAD
Route::post("/admin/goods/updateing/{gid}", "Admin\GoodsController@updateing");
=======
Route::post("/admin/goods/updateing/{gid}","Admin\GoodsController@updateing");
Route::any("/Home/goods/img","Admin\GoodsController@edit");
>>>>>>> c98d5fcfb76f08a33d8a6cd67d450a680cf39a43
//删除商品
Route::get("/admin/goods/delete/{gid}", "Admin\GoodsController@delete");
//商品分类
Route::resource("/Admin/category", "Admin\CategoryController");
//商品导航
Route::post("/Admin/category/setIsNav", "Admin\CategoryController@setIsNav");
//商品添加子类
Route::get("/Admin/category/child/{cid}", "Admin\CategoryController@create");
//删除分类
<<<<<<< HEAD
Route::get("/Admin/category/delete/{cid}", "Admin\CategoryController@destroy");
Route::post("/Home/user/test", "Home\CreateController@test");
=======
Route::get("/Admin/category/delete/{cid}","Admin\CategoryController@destroy");
<<<<<<< HEAD
//验证前台注册账号唯一
Route::post("/Home/user/test","Home\CreateController@test");

//购物车页面
Route::get("/Home/car","Home\CarController@index");
Route::any("/Home/shopcar","Home\CarController@update");
//购物车删除
Route::get("/Home/car/delete/{gid}","Home\CarController@destroy");
//空购物车
Route::any("Home/nullcar","Home\CarController@null");
//提交订单页面
Route::get("/Home/subcar","Home\CarController@subcar");
//提交订单成功页面
Route::get("/Home/endcar","Home\CarController@endcar");
//订单
Route::get("/Home/indent","Home\CarController@indent");
//收货成功
Route::get("/Home/gopl/{sid}","Home\CarController@gopl");
//订单历史
Route::get("/Home/history","Home\CarController@history");
=======
Route::post("/Home/user/test","Home\CreateController@test");
<<<<<<< HEAD

=======
<<<<<<< HEAD
//订单管理=======================================================================
Route::resource("/Home/order","Home\OrderController");
Route::any("/Home/order/index","Home\OrderController@index");
=======
>>>>>>> 1c8a6cb1416dfe0836ac3abcfcb6a806454ebf8c
>>>>>>> 46adae1c984f5417b4396a66c0a8d4b1d1f87767
>>>>>>> 3c5c63d32e70568e5cf6d23ba79ce6eba8b53457
>>>>>>> 2948898854d95509f415060d026e242878b06474
>>>>>>> c9e636ea5cf73c86efbeb0413cbee032ee026c27
>>>>>>> c98d5fcfb76f08a33d8a6cd67d450a680cf39a43
