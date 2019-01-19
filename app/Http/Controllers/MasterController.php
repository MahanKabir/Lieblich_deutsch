<?php

namespace App\Http\Controllers;


use App\DictModel;
use App\Book;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index(){
        return "helo";
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function book(){
        $books=Book::latest()->paginate(6);
        return view('book',compact('books'));
    }
    public function lesson(){
        return view('user.lesson');
    }

    public function dictionary(){
        $dict_model=DictModel::all();
        return view('dictionary',compact('dict_model'));
    }
    public function XO(){
        return view('games.XO');
    }

    public function Wampus(){
        return view('games.wampus');
    }
}
