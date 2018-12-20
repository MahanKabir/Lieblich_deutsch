<?php

namespace App\Http\Controllers;

use App\bookModel;
use App\DictModel;
use Illuminate\Http\Request;

class masterController extends Controller
{
    public function index(){
        return "helo";
    }

    public function book(){
        $bookModels=bookModel::all();
        return view('book',compact('bookModels'));
    }
    public function dictionary(){
        $dict_model=DictModel::all();
        return view('dictionary',compact('dict_model'));
    }
    public function XO(){
        return view('games.XO');
    }
}
