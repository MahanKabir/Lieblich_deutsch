<?php
/**
 * Created by PhpStorm.
 * User: mahan
 * Date: 12/26/18
 * Time: 12:43 PM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

use Carbon\Carbon;

class AdminController extends Controller
{

    /**
     * @param $file
     */
    protected function uploadImages($file){
        $year=Carbon::now()->year;
        $imagepath="/upload/images/{$year}/";
        $filename=$file->getClientOriginalName();
        $file->move(public_path($imagepath),$filename);

    }

}