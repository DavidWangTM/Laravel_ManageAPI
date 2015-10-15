<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //可以填充
    protected $fillable = ['title','content','published_at'];
}
