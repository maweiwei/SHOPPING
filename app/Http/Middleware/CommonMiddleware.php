<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Session;
class CommonMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userRules = DB::table("user_rule")->where("status",1)->get();
        $ruleList = array();
        foreach($userRules as $rule){
            $ruleList[$rule->name] = $rule->title;
        }
        $subject = preg_replace("/\?.+/", "", $_SERVER['REQUEST_URI']);
        $subject = preg_replace("/\/\d$/", "", $subject);
       // dd($subject);
       if (array_key_exists($subject, $ruleList)){
         $groupid = DB::table("user")
                 ->leftJoin("user_group", "user.uid", "=", "user_group.uid")
                 ->where("user.uid", Session::get("userData")->uid)
                 ->pluck("groupid");
         $rules = DB::table("group_rule")->where("id",$groupid)->pluck("rules");
         $ruleid = DB::table("user_rule")->where("name",$subject)->pluck("id");
         if(!in_array($ruleid, explode(",", $rules))){
             if(in_array($subject, ["/admin/group/setRule", "/admin/user/setGroup"]))  return response(["status" => 0, "info" => "对不起，你无权操作！"]);
             return redirect("/errors")->with(["info"=>"你木有这个权限","url"=>$_SERVER['HTTP_REFERER']]);
         }
      }
        return $next($request);
    }
}
