<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class CommonController extends Controller
{
    //初始haunted控制器的执行动作
    public function __construct()
    {
	if (!Session::has("userData"))
	{
	    header("Location:/login");
	    exit;
	}
    }
}
