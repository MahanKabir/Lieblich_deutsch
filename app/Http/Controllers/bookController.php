<?php

namespace App\Http\Controllers;

use App\bookModel;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;

class bookController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book_models=bookModel::all()->sortByDesc('created_at');
        return view('admin.book.index',compact('book_models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(BookRequest $request)

    {
        $imagesUrl = $this->uploadImages($request->file('img_url'));
//        auth()->user()->article()->create(array_merge(['images'=> $imagesUrl],$request->all()));

        return redirect(route('book.index'));


//        $this->validate($request,[
//            'img_url'=>'required',
//            'bookName'=>'required',
//            'bookType'=>'required',
//            'bookAbout'=>'required',
//            'bookPrice'=>'required',
//            'description'=>'required'
//        ]);
//
//        bookModel::create($request->all());

//        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
