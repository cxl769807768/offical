<?php

namespace App;

use Encore\Admin\Traits\DefaultDatetimeFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Contact extends BaseModel
{
    use HasFactory;
    use DefaultDatetimeFormat;
    public $table = "contact";


    protected $fillable = [
        'name', 'mobile','email','msg'
    ];


    public function getList($params){
        $query = self::newQuery();

        if(isset($params['name']) && !empty($params['name']))  $query->where('name','like',$params['name'].'%');
        if(isset($params['page']) && !empty($params['page'])){
            return $query->paginate($params['pageSize'], ['*'],  'page',$params['page']);

        }else{
            return $query->take(5)->get();
        }

    }
}
