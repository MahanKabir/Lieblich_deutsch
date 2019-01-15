@extends('admin.panel')

@section('content')

    <style>
        #book_tile_create{
            width: 100%;
            height: 360px;
            background-color: #d39e00;
            direction: rtl;
            box-shadow: 2.5px 2.5px 2.5px #1d2124;
            border-radius: 2.5px;
        }
    </style>

    <div id="book_tile_create">
        <form action="" method="post" enctype="multipart/form-data">
            <input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">

            <input type="file" name="bookimage"><br>

            <label for="bookname">نام: </label><br>
            <input type="text" name="bookname" value=""><br>

            <label for="booklevel">سطح: </label><br>
            <input type="text" name="booklevel" value=""><br>

            <label for="booktype">نوع: </label><br>
            <input type="text" name="booktype" value=""><br>

            <label for="bookprice">قیمت: </label><br>
            <input type="text" name="bookprice" value=""><br>
            <input type="submit" class="btn btn-success" value="ارسال"><br>
        </form>
    </div>

@endsection