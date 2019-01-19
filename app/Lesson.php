<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable=['lesson_name','lesson_type','lesson_level','lesson_price'];
}
