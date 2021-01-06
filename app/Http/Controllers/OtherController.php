<?php

namespace App\Http\Controllers;

use App\Article;
use App\Contact;
use App\Miscellaneous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Captcha;

class OtherController extends HomeController
{
    public function vivid(){
        $defaultData = $this->getCommonData();
        return view('web/vivid',$defaultData);
    }
    public function videoVivid(){

        $defaultData = $this->getCommonData();
        return view('web/video',$defaultData);
    }
    public function development(){
        $defaultData = $this->getCommonData();
        return view('web/development',$defaultData);
    }
    public function products(){
        $defaultData = $this->getCommonData();
        return view('web/products',$defaultData);
    }
    public function certificates(){

        $id = request()->input('id');
        $defaultData = $this->getCommonData();
        $certificates = Miscellaneous::where('cid',$id)->get()->toArray();
        $result = array_merge($defaultData,['certificates'=>$certificates]);
        return view('web/certificates',$result);
    }

    public function contactUs(){

        $id = request()->input('id');
        $articles = Article::where('cid',$id)->get();
        $defaultData = $this->getCommonData();
        $result = array_merge($defaultData,['articles'=>$articles]);
        return view('web/contactUs',$result);


    }

    public function contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string',
            'msg' => 'required|string',
            'captcha' => 'required|captcha',
        ], [
            'captcha.required' => '验证码不能为空',
            'captcha.captcha' => '请输入正确的验证码',
        ]);
        if ($validator->fails()) {
            return response()->json(['code'=>500,'msg' => '非法数据']);
        }
        $result = Contact::create(\request(['name', 'mobile','email','msg']));
        if ($result) {
            return response()->json(['code'=>200,'msg' => '申请成功']);
        } else {
            return response()->json(['code'=>500,'msg' => '申请失败']);
        }


    }
}
