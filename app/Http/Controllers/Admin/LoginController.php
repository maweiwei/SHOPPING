<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
class LoginController extends Controller
{
    //显示登陆表单
	public function index (Request $request)
	{
		return view("admin.login.index");
	}
}
