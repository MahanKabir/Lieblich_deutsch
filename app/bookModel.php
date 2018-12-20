<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookModel extends Model
{
    protected $table='book_models';
    protected $fillable=['bookName','bookPrice','bookAbout','bookType'];
}
