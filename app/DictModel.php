<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DictModel extends Model
{
    protected $table='dict_models';
    protected $fillable=['word','type','article','means','description'];
}
