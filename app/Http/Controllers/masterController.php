<?php

namespace App\Http\Controllers;

use App\DictModel;
use Illuminate\Http\Request;

class masterController extends Controller
{
    public function index(){
        $dict_model=DictModel::all();
        return view('index',compact('dict_model'));
    }
    public function XO(){
        return view('games.XO');
    }
}
