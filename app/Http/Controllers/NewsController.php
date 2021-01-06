<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends HomeController
{
    public function index(){

        $id = request()->input('id');
        $defaultData = $this->getCommonData();
        $news = News::where('cid',$id)->get()->toArray();
        $result = array_merge($defaultData,['news'=>$news]);
        return view('web/news',$result);
    }
    public function detail(){

        $nid = request()->input('nid');
        $defaultData = $this->getCommonData();
        $news = News::where('id',$nid)->first();
        $result = array_merge($defaultData,['news'=>$news]);
        return view('web/newsDetail',$result);
    }

}
