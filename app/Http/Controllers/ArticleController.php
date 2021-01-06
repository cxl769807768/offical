<?php

namespace App\Http\Controllers;

use App\Article;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Captcha;

class ArticleController extends HomeController
{
    public function index(){

        $id = request()->input('id');
        $defaultData = $this->getCommonData();
        $articles = Article::where('cid',$id)->first();
        $result = array_merge($defaultData,['articles'=>$articles]);
        return view('web/articleDetail',$result);

    }

    public function detail(){

        $aid = request()->input('aid');
        $defaultData = $this->getCommonData();
        $articles = Article::where('cid',$aid)->get();
        $result = array_merge($defaultData,['articles'=>$articles]);
        return view('web/articleDetail',$result);
    }
}
