<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getCommonData(){

        $nav = $this->getNav();
        $pid = request()->input('pid');
        $id = request()->input('id');
        $childNav = $this->getChildMenu($pid);
        $current['parent'] = $this->getCurrentMenu($pid)['cate_name'];
        $current['child'] = $this->getCurrentMenu($id)['cate_name'];
        $webData = $this->set_page_info('天质弘耕-'.$current['child'],'天质弘耕','天质弘耕');
        $defaultData = ['webData'=>$webData,'nav'=>$nav,'childNav'=>$childNav,'current'=>$current];
        return $defaultData;

    }
    public function set_page_info($title, $keywords, $description)
    {

        return [
            'title' => $title,
            'keywords' => $keywords,
            'description' => $description,
        ];
    }
    public function getNav(){
        $data = Categories::GetAllMenuTree();
        return $data;
    }
    public function getChildMenu($id){
        $child = Categories::getChild($id);
        return $child;
    }
    public function getCurrentMenu($id){
        $current = Categories::find($id)->toArray();
        return $current;
    }
}
