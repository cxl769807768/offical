<?php

namespace App;

use Encore\Admin\Traits\DefaultDatetimeFormat;
use Illuminate\Notifications\Notifiable;


class Jobs extends BaseModel
{
    use Notifiable;
    use DefaultDatetimeFormat;
    public $table = "jobs";


    protected $fillable = [
        'name', 'subtitle','status'
    ];


    public function getList($params){
        $query = self::newQuery();

        if(isset($params['name']) && !empty($params['name']))  $query->where('name','like',$params['name'].'%');
        if(isset($params['status']) && !empty($params['status']))  $query->where('status','=',$params['status']);
        if(isset($params['page']) && !empty($params['page'])){
            return $query->paginate($params['pageSize'], ['*'],  'page',$params['page']);

        }else{
            return $query->take(5)->get();
        }

    }

}
