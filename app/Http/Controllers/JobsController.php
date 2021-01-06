<?php

namespace App\Http\Controllers;
use App\ApplyJobs;

use App\Categories;
use App\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Captcha;

class JobsController extends HomeController
{
    public function index(){
        $defaultData = $this->getCommonData();
        $jobs = Jobs::all();
        $result = array_merge($defaultData,['jobs'=>$jobs]);
        return view('web/joinus',$result);
    }


    public function apply(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string',
            'job_name' => 'required|string',
            'resume' => 'required|string',
            'captcha' => 'required|captcha',
        ], [
            'captcha.required' => '验证码不能为空',
            'captcha.captcha' => '请输入正确的验证码',
        ]);
        if ($validator->fails()) {
            return response()->json(['code'=>500,'msg' => '非法数据']);
        }
        $result = ApplyJobs::create(\request(['name', 'mobile','email','job_name','resume']));
        if ($result) {
            return response()->json(['code'=>200,'msg' => '申请成功']);
        } else {
            return response()->json(['code'=>500,'msg' => '申请失败']);
        }


    }

}
