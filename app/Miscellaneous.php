<?php

namespace App;

use App\BaseModel;
use App\Categories;
use Encore\Admin\Traits\DefaultDatetimeFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Miscellaneous extends BaseModel
{
    use HasFactory;
    use DefaultDatetimeFormat;
    use Notifiable;
    public $table = "miscellaneous";



    protected $fillable = [
        'title', 'cover', 'cid'
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * 多对一的关系
     */
    public function miscellaneousCid()
    {
        return $this->belongsTo(Categories::class,'cid','id');
    }

    public function getCoverAttribute($value)
    {
        return $this->attributes['cover'] = empty($value) ? '' : config('filesystems.disks.admin.url')."/".$value;

    }
    public function getList($params){
        $query = self::newQuery();
        if(isset($params['cid']) && !empty($params['tid'])) $query->where('cid','=',$params['tid']);
        if(isset($params['title']) && !empty($params['title']))  $query->where('title','like',$params['title'].'%');
        if(isset($params['page']) && !empty($params['page'])){
            return $query->paginate($params['pageSize'], ['*'],  'page',$params['page']);

        }else{
            return $query->take(5)->get();
        }

    }
}
