<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personModel extends Model
{
    protected $table="person_models";
    protected $fillable=['fname','lname','age'];
    
}
