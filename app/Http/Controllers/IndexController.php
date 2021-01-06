<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Miscellaneous;
use App\News;
use Illuminate\Http\Request;

class IndexController extends HomeController
{
    public function index(){
        $nav = $this->getNav();
        $webData = $this->set_page_info('天质弘耕-首页','天质弘耕','天质弘耕');
        $newsMod = Categories::where('url','=','/news')->where('pid','!=',0)->get()->toArray();
        foreach ($newsMod as $key => $val){
            $newsMod[$key]['newInfo'] = News::where('cid','=',$val['id'])->select('id','title','subtitle','cover','created_at')->get()->toArray();
        }
        $cooperatives = Miscellaneous::where('cid','=',25)->get()->toArray();
        return view('web/index',['webData'=>$webData,'nav'=>$nav,'newsMod'=>$newsMod,'cooperatives'=>$cooperatives]);
    }
}
