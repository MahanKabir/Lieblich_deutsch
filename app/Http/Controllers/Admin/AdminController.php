<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected function uploadImages($file){

        $year=Carbon::now()->year;
        $imagePath="/upload/image/{$year}/";
        $filename=$file->getClientOriginalName();
        $file->move(public_path($imagePath),$filename);
        return $imagePath.$filename;
    }
    protected function uploadImagesCourse($file){

        $year=Carbon::now()->year;
        $imagePath="/upload/image_course/{$year}/";
        $filename=$file->getClientOriginalName();
        $file->move(public_path($imagePath),$filename);
        return $imagePath.$filename;
    }
}
