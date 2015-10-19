<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //可以填充
    protected $fillable = ['title','content','published_at','intro','user_id'];

    public function user(){
        //定义关联
        return $this->belongsTo('App\User');
    }
}
