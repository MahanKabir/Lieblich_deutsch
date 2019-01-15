<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
//    protected $guarded=[];
    protected $fillable=['user_id','bookimage','bookname','booklevel','booktype','bookprice'];
}
