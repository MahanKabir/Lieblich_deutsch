<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Http\Requests\BookRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=Book::all()->sortByDesc('created_at');
        return view('admin.book.view',compact('books'));
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
     * @param BookRequest $request
     * @return string
     */
    public function store(BookRequest $request)
    {
//        return User::create([
//            'level'=>'admin',
//            'name'=>'Mahan',
//            'email'=>'mahan.kabir@gmail.com',
//            'password'=>bcrypt('123456')
//        ]);
        auth()->loginUsingId(1);
//        $imagesUrl=$this->uploadImages($request->file('bookimage'));
//        auth()->user()->book()->create(array_merge(['bookimage'=>$imagesUrl],$request->all()));
//        return redirect(route('book.index'));

        $imagesUrl = $this->uploadImages($request->file('bookimage'));
        auth()->user()->book()->create(array_merge($request->all() , [ 'bookimage' => $imagesUrl]));

        return redirect(route('book.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.book.edit',compact('book'));
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
     *
     * @param Book $book
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return back();
    }
}
