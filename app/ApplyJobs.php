<?php

namespace App;

use Encore\Admin\Traits\DefaultDatetimeFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ApplyJobs extends BaseModel
{
    use HasFactory;
    use DefaultDatetimeFormat;
    public $table = "apply_jobs";

    protected $fillable = [
        'name', 'mobile','email','job_name','resume'
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
